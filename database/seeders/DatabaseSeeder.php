<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\City;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $countries = Country::factory()->count(5)->create();

        // Izveido 20 pilsētas, katrai piešķirot kādu no izveidotajām valstīm
        City::factory()->count(20)->make()->each(function ($city) use ($countries) {
            $city->country_id = $countries->random()->id;
            $city->save();
        });
    }
}
