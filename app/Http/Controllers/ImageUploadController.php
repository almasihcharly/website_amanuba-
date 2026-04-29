<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImageUploadController extends Controller
{
    public function uploadRoomImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'room_type' => 'required|string|in:superior,deluxe,suite'
        ]);

        $image = $request->file('image');
        $roomType = $request->room_type;
        
        // Create directory if it doesn't exist
        $directory = public_path('images/rooms');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        // Generate filename
        $filename = $roomType . '-room.' . $image->getClientOriginalExtension();
        $filepath = $directory . '/' . $filename;

        // Process image
        $img = Image::make($image);
        
        // Resize for different views
        $img->resize(1740, 800, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        // Enhance for hotel theme
        $img->brightness(5);
        $img->contrast(10);
        $img->sharpen(5);

        // Save the image
        $img->save($filepath, 90);

        // Create thumbnail
        $thumbnail = Image::make($image);
        $thumbnail->resize(400, 300, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $thumbnail->save($directory . '/' . $roomType . '-room-thumb.' . $image->getClientOriginalExtension(), 85);

        return response()->json([
            'success' => true,
            'message' => 'Foto kamar berhasil diupload!',
            'filename' => $filename,
            'url' => asset('images/rooms/' . $filename)
        ]);
    }

    public function optimizeExistingImage($roomType)
    {
        $imagePath = public_path('images/rooms/' . $roomType . '-room.jpg');
        
        if (File::exists($imagePath)) {
            $img = Image::make($imagePath);
            
            // Hotel Amanuba theme enhancements
            $img->brightness(3);
            $img->contrast(8);
            $img->colorize(0, 2, 5); // Slight warm tone
            $img->sharpen(3);
            
            // Ensure proper dimensions
            $img->resize(1740, 800, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            
            $img->save($imagePath, 90);
            
            return true;
        }
        
        return false;
    }
}
