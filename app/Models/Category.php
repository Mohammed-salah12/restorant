<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function meals(){
        return $this->hasMany(Meal::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($category) {
            $category->meals()->delete();

        });
    }
}