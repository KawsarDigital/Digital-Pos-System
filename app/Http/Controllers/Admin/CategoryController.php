<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_item = Category::latest()->get();
        return view('admin.pages.categories.index',compact('category_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.categories.create');
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
            'title' => 'required',
            'slug'  => 'required'
        ];
        $this->validate($request,$rules);
        $category_store             = new Category();
        $category_store->title      = $request->input('title');
        $category_store->slug       = $request->input('slug');
        $category_store->status     = $request->input('status') == true ? '1' : 0;
        $category_store->save();
       return redirect()->route('category.index')->with('status','Category Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category_show = Category::findOrFail($id);
        return view('admin.pages.categories.show',compact('category_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_edit = Category::findOrFail($id);
        return view('admin.pages.categories.edit',compact('category_edit'));
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
        $category_update = Category::findOrFail($id);
        $category_update->title = $request->input('title');
        $category_update->slug = $request->input('slug');
        $category_update->status = $request->input('status') == true ? '1' : '0';
        $category_update->save();
        return redirect()->route('category.index')->with('status','Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_delete = Category::findOrFail($id);
        $category_delete->delete();
        return redirect()->back()->with('destroy','Category Deleted Successfully!');
        
    }
}
