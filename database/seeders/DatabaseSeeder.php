<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
       //Product::truncate();
       // Category::truncate();

        //Category::factory(5)->create();

        //  $category = Category::create([
        //     'category_name'=>'Laptop',
        //     'category_desc'=>'This category contains Laptops',

        // ]);
        $category = Category::create([
            'category_name'=>'Mobile',
            'category_desc'=>'This category contains Mobile',

        ]);

       \App\Models\User::factory(10)->create();

        Product::factory(5)->create([
            'category_id'=>$category->id
        ]);
    }
}
        // Product::create([
        //     'product_name'=>'Apple Mobile',
        //     'product_desc'=>'This is  iPhone',
        //     'price'=>'100000',
        //     'image'=>' ',
        //     'category_id'=>$category->id
        // ]);