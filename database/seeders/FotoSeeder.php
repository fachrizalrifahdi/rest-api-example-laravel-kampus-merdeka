<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Foto;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Foto::truncate();

        $faker = Faker::create();

        for($i= 0; $i <= 10; $i++) {
            Foto::create([
                'nama' => $faker->sentence,
                'url'   => 'https://source.unsplash.com/random'
            ]);
        }
    }
}
