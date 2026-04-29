<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => 'Superior',
                'price' => 480000.00,
                'description' => 'Kamar nyaman dengan fasilitas lengkap untuk masa menginap yang menyenangkan. Sempurna untuk wisatawan solo atau pasangan.',
                'image' => 'https://images.unsplash.com/photo-1611892440507-42c791c244f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80',
                'facilities' => json_encode(['Free WiFi', 'AC', 'TV', 'Mini Bar', 'Queen Bed']),
                'max_guests' => 2,
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Deluxe',
                'price' => 864000.00,
                'description' => 'Kamar luas dengan fasilitas premium dan pemandangan kota. Ideal untuk pebisnis dan pasangan.',
                'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80',
                'facilities' => json_encode(['Free WiFi', 'AC', 'City View', 'Work Desk', 'King Bed']),
                'max_guests' => 3,
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suite',
                'price' => 1430000.00,
                'description' => 'Suite mewah dengan ruang tamu terpisah dan layanan premium. Sempurna untuk eksekutif dan acara khusus.',
                'image' => 'https://images.unsplash.com/photo-1564013799919-600d0b5a107b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80',
                'facilities' => json_encode(['Living Room', 'Sea View', 'Jacuzzi', 'Butler Service', 'King Bed + Sofa']),
                'max_guests' => 4,
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('rooms')->insert($rooms);
    }
}
