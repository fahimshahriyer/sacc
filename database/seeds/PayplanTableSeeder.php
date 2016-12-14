<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Payplan;

class PayplanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('payplans')->truncate();
        DB::table('fee_payplan')->truncate();

        $faker = Factory::create();

        foreach (range(1,3) as $i){

            $payplan = Payplan::create([
                'name' => $faker->sentence,
                'description' => $faker->sentence,
                'is_recurring' => $faker->boolean,
                'billing_cycle' => $faker->numberBetween(1,10)
            ]);
            foreach( range(1, mt_rand(2,5)) as $j ){
                $fee_id = $faker->numberBetween(1,10);
                $payplan_id = $i;
                $amount = $faker->numberBetween(1000,2500);

                DB::table('fee_payplan')->insert([
                    'fee_id' => $fee_id,
                    'payplan_id' => $payplan_id,
                    'amount' => $amount
                ]);
            }
        }
    }
}
