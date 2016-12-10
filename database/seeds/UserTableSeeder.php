<?php

use Illuminate\Database\Seeder;
use Faker\factory;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('users')->truncate();

        User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => bcrypt('secret'),
        ]);

		$faker = Factory::create();

        foreach (range(1, 100) as $i) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);   
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
