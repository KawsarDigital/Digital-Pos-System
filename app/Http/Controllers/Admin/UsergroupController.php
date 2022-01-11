<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\UserGroup;
use Illuminate\Http\Request;

class UsergroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userGroup = UserGroup::latest()->paginate(10);
        return view('admin.pages.users.usergroup.index', compact('userGroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.users.usergroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userGroup_store = new UserGroup();
        $userGroup_store->title = $request->input('title');
        $userGroup_store->status = $request->input('status') == true ? '1' : 0;
        $userGroup_store->save();
        return redirect()->route('userGroup.index')->with('satus','User Group Added Successfully!');
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
        $userGroup_edit = UserGroup::findOrFail($id);
        return view('admin.pages.users.usergroup.edit',compact('userGroup_edit'));
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

        $userGroup_store = UserGroup::findOrFail($id);
        $userGroup_store->title = $request->input('title');
        $userGroup_store->status = $request->input('status') == true ? '1' : 0;
        $userGroup_store->update();
        return redirect()->route('userGroup.index')->with('status','User Group Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userGroup_destroy = UserGroup::findOrFail($id);
        $userGroup_destroy->delete();
        return redirect()->back()->with('destroy','User Group Deleted Successfully!');
    }
}
