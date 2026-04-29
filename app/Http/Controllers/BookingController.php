<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function create()
    {
        $rooms = Room::where('available', true)->get();
        return view('pages.booking', compact('rooms'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer|min:1',
            'special_requests' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $room = Room::findOrFail($request->room_id);
        
        // Validasi jumlah tamu tidak melebihi kapasitas kamar
        if ($request->guests > $room->max_guests) {
            return redirect()->back()
                ->withErrors(['guests' => "Jumlah tamu tidak boleh melebihi kapasitas kamar (maks {$room->max_guests} tamu)"])
                ->withInput();
        }

        // Validasi ketersediaan kamar
        if (!$room->isAvailableForDates($request->check_in, $request->check_out)) {
            return redirect()->back()
                ->withErrors(['room_id' => 'Kamar tidak tersedia untuk tanggal yang dipilih'])
                ->withInput();
        }

        // Hitung total harga
        $checkIn = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);
        $nights = $checkIn->diffInDays($checkOut);
        $totalPrice = $room->price * $nights;

        // Buat booking
        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'guests' => $request->guests,
            'total_price' => $totalPrice,
            'special_requests' => $request->special_requests,
            'status' => 'pending',
        ]);

        return redirect()->route('booking.confirmation', $booking->id)
            ->with('success', 'Pemesanan berhasil! Kami akan segera menghubungi Anda untuk konfirmasi.');
    }

    public function confirmation($id)
    {
        $booking = Booking::with('room')->findOrFail($id);
        return view('pages.booking-confirmation', compact('booking'));
    }

    public function checkAvailability(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
        ]);

        $room = Room::findOrFail($request->room_id);
        $isAvailable = $room->isAvailableForDates($request->check_in, $request->check_out);

        return response()->json([
            'available' => $isAvailable,
            'message' => $isAvailable ? 'Kamar tersedia' : 'Kamar tidak tersedia untuk tanggal yang dipilih'
        ]);
    }
}
