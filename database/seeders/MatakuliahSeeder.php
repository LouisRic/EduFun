<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('matakuliah')->insert([
                'publishdate' => $faker->date(),
                'name' => $faker->sentence(3),
                'imgurl' => $faker->imageUrl(640, 480, 'education', true, 'course-'.$i),
                'category' => $faker->randomElement(['Data Science', 'Network Security']),
                'description' => $faker->paragraph(),
                'writer_id' => $faker->numberBetween(1, 3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
