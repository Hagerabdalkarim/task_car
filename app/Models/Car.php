<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
      protected $fillable = [
        'title',
        'price',  
        'luggage',
        'content',
        'passenger',
        'doors',
        'category_id',
         'active',
         'image',     
    ];
      public function category(){
         return $this->belongsTo(Category::class);
        }
}
