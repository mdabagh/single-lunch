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
        Schema::create('daily_schedules', function (Blueprint $table) { //روزاهای هفته
            $table->increments('id');
            $table->integer('weekly_schedule_id')->unsigned(); //ایدی برنامه هفتگی
            $table->integer('day'); // 1-7 شنبه تا جمعه
            $table->integer('breakfast_id')->unsigned(); //صبحانه
            $table->integer('snack_id')->unsigned(); //میان وعده
            $table->integer('lunch_id')->unsigned();
            $table->integer('evening_meal_id')->unsigned(); //عصرانه
            $table->integer('dinner_id')->unsigned();
            $table->foreign('weekly_schedule_id')->references('id')->on('weekly_schedules');
            $table->foreign('breakfast_id')->references('id')->on('meals');
            $table->foreign('snack_id')->references('id')->on('meals');
            $table->foreign('lunch_id')->references('id')->on('meals');
            $table->foreign('evening_meal_id')->references('id')->on('meals');
            $table->foreign('dinner_id')->references('id')->on('meals');
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
        Schema::dropIfExists('daily_schedules');
    }
};
