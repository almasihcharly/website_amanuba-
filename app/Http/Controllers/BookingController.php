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
            'duration' => 'required|integer|min:1|max:30',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $room = Room::findOrFail($request->room_id);
        
        // Hitung tanggal check-out
        $checkIn = Carbon::parse($request->check_in);
        $duration = intval($request->duration);
        $checkOut = $checkIn->copy()->addDays($duration);

        // Validasi ketersediaan kamar
        if (!$room->isAvailableForDates($request->check_in, $checkOut->toDateString())) {
            return redirect()->back()
                ->withErrors(['room_id' => 'Kamar tidak tersedia untuk tanggal yang dipilih'])
                ->withInput();
        }

        // Hitung total harga
        $totalPrice = $room->price * $duration;

        // Buat booking
        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $checkOut->toDateString(),
            'guests' => 1, // Default since removed from simple form
            'total_price' => $totalPrice,
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
