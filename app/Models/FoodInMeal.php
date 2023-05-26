<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodInMeal extends Model
{
    use HasFactory;

    protected $table = 'food_in_meals';

    protected $fillable = [
        'meal_id',
        'foodstuff_id',
        'amount',
        'unit',
   ];

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function foodstuff()
    {
        return $this->belongsTo(Foodstuff::class);
    }
}