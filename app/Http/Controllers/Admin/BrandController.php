<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand_item = Brand::latest()->paginate(10);
        return view('admin.pages.brands.index', compact('brand_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required'
        ];

        $this->validate($request, $rules);

        $brand_store = new Brand();
        $brand_store->title = $request->input('title');
        $brand_store->status = $request->input('status') == true ? '1': 0 ;  
        $brand_store->save();
        return redirect()->route('brand.index')->with('status','Brand Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand_show = Brand::findOrFail($id);
        return view('admin.pages.brands.show',compact('brand_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand_edit = Brand::findOrFail($id);
        return view('admin.pages.brands.edit',compact('brand_edit'));
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
        $brand_update = Brand::findOrFail($id);
        $brand_update->title = $request->input('title');
        $brand_update->status = $request->input('status') == true ? '1': 0 ;  
        $brand_update->save();
        return redirect()->route('brand.index')->with('status','Brand Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand_destroy = Brand::findOrFail($id);
        $brand_destroy->delete();
        return redirect()->back()->with('destroy','Brand Deleted Successfully!');
    }
}
