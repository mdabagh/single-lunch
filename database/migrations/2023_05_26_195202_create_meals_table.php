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
        Schema::create('meals', function (Blueprint $table) { //غذاها
            $table->increments('id');
            $table->string('name');
            $table->text('recipes');//دستور پخت
            $table->integer('user_id'); //اگر null بود یعنی ثابت و اگر پر بود یعنی متعلق به کابر
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
        Schema::dropIfExists('meals');
    }
};
