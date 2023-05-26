<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'weekly_schedule_id',
        'day',
        'breakfast_id',
        'snack_id',
        'lunch_id',
        'evening_meal_id',
        'dinner_id',
    ];

    public function weeklySchedule()
    {
        return $this->belongsTo(WeeklySchedule::class);
    }

    public function breakfast()
    {
        return $this->belongsTo(Meal::class);
    }

    public function snack()
    {
        return $this->belongsTo(Meal::class);
    }

    public function lunch()
    {
        return $this->belongsTo(Meal::class);
    }

    public function eveningMeal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function dinner()
    {
        return $this->belongsTo(Meal::class);
    }
}