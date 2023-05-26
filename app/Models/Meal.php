<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'recipes',
        'user_id',
    ];

    public function foodstuffs()
    {
        return $this->belongsToMany(Foodstuff::class)->withPivot('amount', 'unit');
    }
}