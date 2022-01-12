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
        $product_item = Product::latest()->paginate(10);

        return view('admin.pages.products.index',compact('product_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $types         = Group::where('status',1)->latest()->get();
     $brands        = Brand::where('status',1)->latest()->get();
     $categories    = Category::where('status',1)->latest()->get();

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
      $product_store->type_id       = $request->input('type_id');
      $product_store->category_id   = $request->input('category_id');
      $product_store->brand_id      = $request->input('brand_id');
     
      $product_store->name          = $request->input('name');
      $product_store->code          = $request->input('code');
      $product_store->cost          = $request->input('cost');
      $product_store->price         = $request->input('price');
      $product_store->product_tax   = $request->input('product_tax');
      if ($request->hasfile('image')) {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('uploads/products/', $filename);
        $product_store->image = $filename;
    }
      $product_store->alert_qty     = $request->input('alert_qty');
      $product_store->details       = $request->input('details');
      $product_store->qty           = $request->input('qty');
      $product_store->status        = $request->input('status') == true ? '1': 0;
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
        $product_show = Product::findOrFail($id);
        $types        = Group::latest()->get();
        $categories   = Category::latest()->get();
        $brands       = Brand::latest()->get();
        return view('admin.pages.products.show',compact('product_show','types','categories','brands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_edit = Product::findOrFail($id);
        $types        = Group::latest()->get();
        $categories   = Category::latest()->get();
        $brands       = Brand::latest()->get();
        return view('admin.pages.products.edit',compact('product_edit','types','categories','brands'));
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
        $product_update = Product::findOrFail($id);
        $product_update->type_id = $request->input('type_id');
        $product_update->category_id = $request->input('category_id');
        $product_update->brand_id = $request->input('brand_id');
       
        $product_update->name = $request->input('name');
        $product_update->code = $request->input('code');
        $product_update->cost = $request->input('cost');
        $product_update->price = $request->input('price');
        $product_update->product_tax = $request->input('product_tax');
        if ($request->hasfile('image')) {
            $destination = 'uploads/products' . $product_update->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products/', $filename);
            $product_update->image = $filename;
        }
        $product_update->alert_qty = $request->input('alert_qty');
        $product_update->details = $request->input('details');
        $product_update->qty = $request->input('qty');
        $product_update->status = $request->input('status') == true ? '1': 0;
        $product_update->save();
        return redirect()->route('product.index')->with('status','Product Updated Successfully!');

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
