<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_in_meals', function (Blueprint $table) { //موادغذایی هر غذا
            $table->integer('meal_id')->unsigned(); //غذا
            $table->integer('foodstuff_id')->unsigned(); //مواد غذایی
            $table->decimal('amount', 10, 2); //میزان
            $table->string('unit', 50); //واحد
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
            $table->foreign('foodstuff_id')->references('id')->on('foodstuffs')->onDelete('cascade');
            $table->primary(['meal_id', 'foodstuff_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_in_meals');
    }
};
