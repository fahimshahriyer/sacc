<?php

use Illuminate\Database\Seeder;
use Faker\factory;
use App\User;
use App\Models\Student;


class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('students')->truncate();

		$faker = Factory::create();

		foreach (range(1, 100) as $i) {
			$userId = $faker->unique()->numberBetween(1,100);

			Student::create([
				'user_id' => $userId,
				'name' => User::findOrFail($userId)->name,
				'unique_roll_no' => $faker->unique()->numberBetween(10000,20000),
			]);
		}
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
