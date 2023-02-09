<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($category) {
            $category->subcategories()->delete();

        });
        static::deleting(function($category) {
            $category->bookings()->delete();

        });
    }

}
