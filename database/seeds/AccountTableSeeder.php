<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->truncate();

        $faker = Factory::create();

        foreach (range(1, 10) as $i) {

            Account::create([
                'account_type_id' => $faker->numberBetween(1,5),
                'name' => $faker->sentence(3),
                'description' => $faker->sentence(20),
                'account_head' => $faker->numberBetween(101,200),
                'opening_date' => Carbon::now()
            ]);
        }
    }
}
