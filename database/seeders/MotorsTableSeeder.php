<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 10) as $item) {

            DB::table('Motors')->insert([

                // 'name' => $faker->text(50),

                'Model' => $faker->text(15),
                'price' => $faker->randomFloat(20 , 200 , 2000),
                'image' => $faker->text(5),
                'color' => $faker->randomElement(['Blue','Red','Black']),

                'weight' => $faker->randomElement(['150','350','400','700']),

                'updated_at' => now(),

                'created_at' => now()

            ]);

        }
    }
}
