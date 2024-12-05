<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Rental;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User Factory
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Altabalah',
            'email' => 'altapbalah@gmail.com',
            'is_admin' => false,
        ]);

        Room::create([
            'no_room' => '101',
            'type' => 'King Room With Balcony',
            'description' => 'Designed in a contemporary modern and minimalistic house sytle with king size bed.
Perfect for a romantic & famility getaway or some relaxing me-time, your generously sized accommodation features everything you need for some downright serious pampering.',
            'area' => 25,
            'capacity' => '2 Adults, 1 Child',
            'view' => 'Pantai',
            'features' => 'Accommodate up to 2 Adults with 1 Child sharing bed with parents.
Share balcony
Full inner bathroom 
Complementary wireless internet access
Daily housekeeping and evening turndown service.
24-hour butler service
Individually controlled air-conditioning
Kitchen facilities
Coffee and tea making facilities
Gym facilities',
            'price' => 400000,
            // Path to the image file if any
            'availability' => true,
        ]);

        Room::create([
            'no_room' => '102',
            'type' => 'Double Room With Balcony',
            'description' => 'Designed in a contemporary modern and minimalistic house sytle with superking bed. Perfect for a romantic & famility getaway or some relaxing me-time, your generously sized accommodation features everything you need for some downright serious pampering.',
            'area' => 10,
            'capacity' => '2 Adults',
            'view' => 'Garden View',
            'features' => 'Accommodate up to 2 Adults
Breakfast
Share balcony
Full inner bathroom
Complementary wireless internet access
Daily housekeeping and evening turndown service.
24-hour butler service
Individually controlled air-conditioning
Kitchen facilities
Coffee and tea making facilities
Gym facilities',
            'price' => 200000,

            'availability' => true,
        ]);

        Rental::create([
            'name' => 'Snorkeling Trip 3 Gili',
            'description' => 'When you are on holiday on Gili Trawangan, snorkeling trips are one of the activities that many tourists are interested in. Snorkeling is indeed an exciting thing because you will see the unspoiled underwater beauty of Gili Trawangan. Cute fish and colorful coral reefs are the attraction during the 3 Gili snorkeling trip. On Gili Trawangan you can join the 3 Gili Snorkeling Trip which starts from 9 am to 3 pm and costs Rp. 75,000/person. If you want a Private Snorkeling Trip, you can rent a Snorkeling Boat at a cost of around 1 million Rupiah for one trip on 3 gili.',
            'price' => 175000.00,

            'available' => true,
        ]);
        Rental::create([
            'name' => 'Tour the Island by Bike',
            'description' => 'For those of you who dont like sea activities, you can try to see the beauty of Gili Trawangan by getting around by bicycle. You can enjoy exploring villages on Gili Trawangan that few people know about. You can rent a bicycle for around Rp. 30,000/hour.',
            'price' => 30000.00,

            'available' => true,
        ]);
        Rental::create([
            'name' => 'Tour Glass Bottom Boat',
            'description' => 'If you like seeing the beauty of the underwater world but you cannot snorkel, you can try the Glass Bottom Boat Tour. Boatman will take you to beautiful, unspoiled spots where cute fish gather. You can see underwater life from a boat where the bottom is transparent or glass. making it easier for you to see the beautiful seabed of Gili Trawangan. Here you can rent a Glass Bottom Boat for around Rp. 850,000 for one trip to many beautiful spots.',
            'price' => 850000.00,

            'available' => true,
        ]);
        Rental::create([
            'name' => 'GoPro for Diving',
            'description' => 'Gili Snorkeling trip also offers GoPro rental services, allowing you to capture and preserve your snorkeling experience.',
            'price' => 250000.00,

            'available' => true,
        ]);

        Booking::create([
            'customer_name' => 'John Doe',
            'check_in' => '2024-08-01',
            'check_out' => '2024-08-05',
            'room' => 'Double Room With Balcony',
            'guest' => 2,
            'status' => 'ongoing',
        ]);

        Booking::create([
            'customer_name' => 'Jane Smith',
            'check_in' => '2024-08-10',
            'check_out' => '2024-08-15',
            'room' => 'King Room With Balcony',
            'guest' => 3,
            'status' => 'complete',
        ]);

        // Factory
        // User::factory(100)->create();
        //Category::factory(100)->create();
        //Todo::factory(500)->create();

        // Factory with Relationship
        // User::all()->each(function (User $user) {
        //     $user->todos()->saveMany(Todo::factory(10)->make());
        // });
        // User::factory(100)->create()->each(function (User $user) {
        //     $user->todos()->saveMany(Todo::factory(10)->make());
        // });
    }
}
