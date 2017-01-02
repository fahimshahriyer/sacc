<?php

use App\Models\AccountType;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AccountTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('account_types')->truncate();

        $faker = Factory::create();

        $categories = ['Asset','Bank','Equity','Expenses','Liabilities','Revenue'];

        foreach ($categories as $category) {
            AccountType::create([
                'name' => $category,
                'description' => $faker->sentence(20)
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    }
}
