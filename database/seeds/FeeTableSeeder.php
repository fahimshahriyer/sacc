<?php

use App\Models\Fee;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fees')->truncate();

        $faker = Factory::create();

        foreach (range(1, 10) as $i) {

            Fee::create([
                'name' => $faker->sentence(3),
                'description' => $faker->sentence(20)
            ]);
        }
    }
}
