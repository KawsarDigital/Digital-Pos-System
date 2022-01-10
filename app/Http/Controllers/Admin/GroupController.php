<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Group;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group_item = Group::latest()->paginate(10);
     
        return view('admin.pages.types.index',compact('group_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.types.create');
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
            'status' => 'required',
        ];

        $this->validate($request,$rules);

        $group_item = new Group();
        $group_item->title = $request->input('title');
        $group_item->slug = Str::slug($request->input('title','-'));
        $group_item->status = $request->input('status') == true ? '1' : '0';
        $group_item->save();

        return redirect()->route('group.index')->with('status','Type Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group_show = Group::findOrFail($id);
        return view('admin.pages.types.show',compact('group_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group_edit = Group::findOrFail($id);
        return view('admin.pages.types.edit',compact('group_edit'));
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
        $group_update = Group::findOrFail($id);
        $group_update->title = $request->input('title');
        $group_update->slug = Str::slug($request->input('title','-'));
        $group_update->status = $request->input('status') == true ? '1' : '0';
        $group_update->save();
        return redirect()->route('group.index')->with('status','Type Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group_delete = Group::findOrFail($id);
        $group_delete->delete();
        return redirect()->back()->with('destroy','Type Deleted Successfully!');
    }
}
