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
            $table->integer('payplan_id')->unsigned();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->double('amount');
            $table->timestamps();
        });

        Schema::table('fees', function (Blueprint $table){
            $table->foreign('payplan_id')->references('id')->on('payplans')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
