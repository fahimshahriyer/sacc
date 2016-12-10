<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Carbon\Carbon;


class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('invoices')->truncate();
		DB::table('invoice_items')->truncate();


        $faker = Factory::create();

        foreach (range(1, 20) as $i) {
        	$items = collect();

        	foreach( range(1, mt_rand(2,20)) as $j ) {
        		$amount = $faker->numberBetween(1000,5000);
        		$quantity = $faker->numberBetween(1,10);

        		$items->push( new InvoiceItem([
        			'name' => $faker->sentence,
        			'quantity' => $quantity,
        			'amount' => $amount,
        			'total' => ($quantity*$amount),
        		]));
        	}

        	$subTotal = $items->sum('total');
	        $adjustment = $faker->numberBetween(100,2000);
	        $invoiceDate = Carbon::today();
	        $dueDate = Carbon::today()->addDays(10);

	        $grandTotal = $subTotal - $adjustment;

	        $invoice = Invoice::create([
	        	'invoice_no' => $faker->numberBetween(100,2000),
	        	'invoice_date' => $invoiceDate,
	        	'due_date' => $dueDate,
	        	'student_id' => $faker->numberBetween(1,20),
	        	'sub_total' => $subTotal,
	        	'total_adjustment' => $adjustment,
	        	'grand_total' => $grandTotal,
	        	'approval_date' => $invoiceDate,
	        	'is_paid' => $faker->boolean
	        ]);

	        $invoice->items()->saveMany($items);
        }
    }
}
