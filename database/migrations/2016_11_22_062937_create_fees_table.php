<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('fee_payplan' ,function (Blueprint $table){

            $table->integer('fee_id')->unsigned();
            $table->integer('payplan_id')->unsigned();
            $table->decimal('amount');
            $table->timestamps();

            $table->foreign('fee_id')->references('id')->on('fees')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('payplan_id')->references('id')->on('payplans')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['fee_id', 'payplan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fee_payplan');
        Schema::dropIfExists('fees');
    }
}
