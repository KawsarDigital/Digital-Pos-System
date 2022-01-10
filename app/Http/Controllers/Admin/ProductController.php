<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use App\Models\Admin\Group;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_item = Product::with('category')->latest()->get();

        return view('admin.pages.products.index',compact('product_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $types = Group::where('status',1)->latest()->get();
     $brands = Brand::where('status',1)->latest()->get();
     $categories = Category::where('status',1)->latest()->get();

        return view('admin.pages.products.create',compact('categories','brands','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

      $product_store = new Product();
      $product_store->type_id = $request->input('type_id');
      $product_store->category_id = $request->input('category_id');
      $product_store->brand_id = $request->input('brand_id');
     
      $product_store->name = $request->input('name');
      $product_store->cost = $request->input('cost');
      $product_store->price = $request->input('price');
      $product_store->product_tax = $request->input('product_tax');
      if ($request->hasfile('image')) {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('uploads/products/', $filename);
        $product_store->image = $filename;
    }
      $product_store->alert_qty = $request->input('alert_qty');
      $product_store->details = $request->input('details');
      $product_store->qty = $request->input('qty');
      $product_store->status = $request->input('status') == true ? '1': 0;
      $product_store->save();
      return redirect()->route('product.index')->with('status','Product Added Successfully!');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_destroy = Product::findOrFail($id);
        $product_destroy->delete();
        return redirect()->back()->with('destroy','Product Deleted Successfully!');

    }
}
