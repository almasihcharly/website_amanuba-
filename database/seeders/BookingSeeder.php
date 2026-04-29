<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [
            [
                'name' => 'John Smith',
                'email' => 'john.smith@email.com',
                'phone' => '+1 555-123-4567',
                'check_in' => '2026-05-15',
                'check_out' => '2026-05-18',
                'guests' => 2,
                'room_id' => 1, // Superior
                'total_price' => 960000.00,
                'special_requests' => 'Late check-in requested, prefer room on higher floor',
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah.j@email.com',
                'phone' => '+1 555-987-6543',
                'check_in' => '2026-06-10',
                'check_out' => '2026-06-14',
                'guests' => 3,
                'room_id' => 2, // Deluxe
                'total_price' => 3456000.00,
                'special_requests' => 'Extra bed needed, allergy-friendly room',
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Chen',
                'email' => 'm.chen@business.com',
                'phone' => '+1 555-456-7890',
                'check_in' => '2026-07-20',
                'check_out' => '2026-07-25',
                'guests' => 4,
                'room_id' => 3, // Suite
                'total_price' => 7150000.00,
                'special_requests' => 'Business center access, airport transfer',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('bookings')->insert($bookings);
    }
}
