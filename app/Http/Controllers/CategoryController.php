<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category){
        $products = $category->products;
        return view('category', ['products' => $products, 'category'  => $category]);
    }
}
