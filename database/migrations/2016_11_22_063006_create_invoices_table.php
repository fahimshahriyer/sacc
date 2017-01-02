<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_no')->unique();
            $table->dateTime('invoice_date');
            $table->dateTime('due_date');
            $table->integer('student_id')->unsigned();
            $table->decimal('sub_total');
            $table->decimal('total_tax')->nullable();
            $table->decimal('total_adjustment');
            $table->decimal('grand_total');
            $table->decimal('amount_due')->nullable();
            $table->smallInteger('status')->default(0); // 0 = due, 1 = partial, 2 = paid
            $table->dateTime('approval_date');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
