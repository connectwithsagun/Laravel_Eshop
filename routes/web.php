<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Post;


use Psy\Command\WhereamiCommand;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = Product::all();
    return view('products', ['products' => $products] );

});


// Route::get('/product', function () {
//     return view('product');
// });


Route::get('/products/{product}', function (Product $product) {
    //$product = Product::find($id);
    return view('product', ['product' => $product]);
});


// Route:: get('/create_product', function(){
//     Product::create([
//         'product_name' => 'Laptop',
//         'product_desc' => 'This is very nice laptop',
//         'price' => '107000',
//         'image' => ' ',
//         'category_id' => 4

//     ]);
    // Product::create([
    //     'product_name' => 'Router',
    //     'product_desc' => 'This is very reliable router',
    //     'price' => '2500',
    //     'image' => ' '

    // ]);
    // Product::create([
    //     'product_name' => 'Bike',
    //     'product_desc' => 'This is very nice bike',
    //     'price' => '200000',
    //     'image' => ' '

    // ]);
    // Product::create([
    //     'product_name' => 'Bus',
    //     'product_desc' => 'This is very nice bus',
    //     'price' => '2000000',
    //     'image' => ' '

    // ]);
//});





Route:: get('/get_product', function(){
  $products = Product::get();
  return $products;

   
});

Route:: get('/create_post', function(){
    Post::create([
        'post_name' => 'Ethical Hacking',
        'post_desc' => 'This is very important aspects in this technology era.'
    ]);

    Post::create([
        'post_name' => 'Ethical Hacking2',
        'post_desc' => 'This is very important things in this technology era.'
    ]);

    Post::create([
        'post_name' => 'Ethical Hacking3',
        'post_desc' => 'This is very-very important things in this technology era.'
    ]);
});





Route::get('/posts', function () {
    $posts_detail = Post::get();
    return view('posts', ['posts' => $posts_detail]);
});



//
/*(by using controller)
  //Route::get('/get_post','productDetailController@index');
 // Route::get('/get_post', 'App\Http\Controllers\productDetailController@index');
*/


  Route::get('/posts/{post}', function ($id) {
    $post = Post::find($id);
    return view('post', ['post' => $post]);
});


//getting products without using controller
// Route::get('/home', function () {

//     $products = Product::latest()->get();
//     return view('home', ['products' => $products] );

//     //getting products with category
//     //$products = Product::latest()->with('category')->get();
// });

//getting products with using controller
Route::get('/home',[ProductController::class,'index']);



//getting categories without using controller
// Route::get('/categories/{category}',function(Category $category){
    
//     //$products = products::whereCategoryId($category->id)->get();
//     $products = $category->products;

//     return view('category', ['products' => $products, 'category'  => $category]);
// });

//getting category with using controller
Route::get('categories/{category}',[CategoryController::class,'index']);









//admin routing
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
Route::get('/admin/products',[App\Http\Controllers\Admin\ProductController::class,'index'])->name('product_list');
Route::get('/admin/products/create',[App\Http\Controllers\Admin\ProductController::class,'create'])->name('product_create');
Route::post('/admin/products/store',[App\Http\Controllers\Admin\ProductController::class,'store']);
Route::get('/admin/products/edit/{product}',[App\Http\Controllers\Admin\ProductController::class,'edit']);
Route::post('/admin/products/update/{product}',[App\Http\Controllers\Admin\ProductController::class,'update']);
Route::get('/admin/products/delete/{product}',[App\Http\Controllers\Admin\ProductController::class,'destroy']);


