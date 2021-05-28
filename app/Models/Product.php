<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_desc',
        'price',
        'image',
        'category_id'
        
    ];

    protected $attributes = [
        'image' => ' ',
    ];


//getting products with category
protected $with = ['category'];

//fetching category name in product details list
    public function category(){
        // relation hasOne, hasMany, belongsTo, belongsToMany

      return  $this->belongsTo(Category::class, 'category_id');
    }
}



