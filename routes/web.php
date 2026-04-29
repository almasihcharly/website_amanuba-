<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ImageUploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main Pages
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/rooms', function () {
    return view('pages.rooms');
})->name('rooms');

Route::get('/facilities', function () {
    return view('pages.facilities');
})->name('facilities');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Image Upload Routes
Route::get('/upload-image', function () {
    return view('pages.upload-image');
})->name('upload.image');
Route::post('/upload-room-image', [ImageUploadController::class, 'uploadRoomImage'])->name('upload.room.image');

// Booking Routes
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/confirmation/{id}', [BookingController::class, 'confirmation'])->name('booking.confirmation');
Route::post('/booking/check-availability', [BookingController::class, 'checkAvailability'])->name('booking.check-availability');

// Legacy booking route (for backward compatibility)
Route::post('/booking/legacy', function (Request $request) {
    // Validate the booking data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'check_in' => 'required|date|after:today',
        'check_out' => 'required|date|after:check_in',
        'room_type' => 'required|string',
        'guests' => 'required|integer|min:1|max:6',
        'special_requests' => 'nullable|string|max:1000',
        'terms' => 'required|accepted',
    ]);

    // Here you would typically save to database
    // For now, we'll just redirect with success message
    
    return redirect()->route('contact')
        ->with('success', 'Your reservation request has been received! We will contact you within 24 hours to confirm your booking.');
})->name('booking.legacy');

// Admin Routes (for future implementation)
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'Admin Dashboard - Coming Soon';
    })->name('admin.dashboard');
});
