<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 3; $i++) {
            DB::table('writer')->insert([
                'name' => $faker->name,
                'description' => $faker->sentence(6),
                'imgurl' => $faker->imageUrl(400, 400, 'people', true, 'writer-'.$i),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
