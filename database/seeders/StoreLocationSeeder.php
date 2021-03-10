<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $stores = [
            [
                'title' => 'Wellington Donor Centre',
                'image' => 'sample-storefront.png',
                'latitude' => -41.3072415,
                'longitude' => 174.7799253,
            ],
            [
                'title' => 'Kapiti Impact Church',
                'image' => 'sample-storefront.png',
                'latitude' => -40.915788,
                'longitude' => 175.010264,
            ],
            [
                'title' => 'Johnsonville Community Centre',
                'image' => 'sample-storefront.png',
                'latitude' => -41.2223217,
                'longitude' => 174.8053251,
            ],
            [
                'title' => 'Dowse Art Museum',
                'image' => 'sample-storefront.png',
                'latitude' => -41.21221,
                'longitude' => 174.9040703,
            ],
            [
                'title' => 'Masterton YMCA',
                'image' => 'sample-storefront.png',
                'latitude' => -40.9552354,
                'longitude' => 175.6535033,
            ],
        ];
        foreach ($stores as $store) {
            DB::table('store_locations')->insert([
                'title' => $store['title'],
                'image' => $store['image'],
                'latitude' => $store['latitude'],
                'longitude' => $store['longitude'],
            ]);
        }
    }
}
