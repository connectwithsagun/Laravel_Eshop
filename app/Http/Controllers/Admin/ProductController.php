<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::latest()->get();
       return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin/products/create',  compact('categories'));   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->product_name = $request->input('product_name');
        $product->product_desc = $request->input('product_desc');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        if($product->save()){
            return redirect()->route('product_list');
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin/products/edit',  compact(['product', 'categories']));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {

        $product->product_name = $request->input('product_name');
        $product->product_desc = $request->input('product_desc');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        if($product->save()){
            return redirect()->route('product_list');
        }
        else{
            return redirect()->back();
        }

       
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product = Product::find($product)->delete();
        return back()->with('message','Student Deleted Successfull !');
    }
}
// $student = Student::find($id)->delete();