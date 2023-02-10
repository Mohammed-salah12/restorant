<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    public function meals(){
        return $this->hasMany(Meal::class,'subcategory_id','id');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($subcategory) {
            $subcategory->meals()->delete();

        });
    }
}