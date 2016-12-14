<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(InvoiceTableSeeder::class);
        $this->call(FeeTableSeeder::class);
        $this->call(PayplanTableSeeder::class);
    }
}
