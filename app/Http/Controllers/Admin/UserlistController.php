<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\UserList;
use App\Http\Controllers\Controller;
use App\Models\Admin\UserGroup;

class UserlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userList = UserList::latest()->paginate(10);
        return view('admin.pages.users.index',compact('userList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = UserGroup::where('status',1)->latest()->get();

        return view('admin.pages.users.create',compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $userList = new UserList();
       $userList->group_id      = $request->input('group_id'); 
       $userList->first_name    = $request->input('first_name'); 
       $userList->last_name     = $request->input('last_name'); 
       $userList->email         = $request->input('email'); 
       $userList->status        = $request->input('status') == true ? '1' : 0; 
       $userList->save();
       return redirect()->route('userList.index')->with('status','User Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userList_edit = UserList::findOrFail($id);
        $userGroup = UserGroup::latest()->get();
        return view('admin.pages.users.edit',compact('userList_edit','userGroup'));
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
        $userList                =  UserList::findOrFail($id);
        $userList->group_id      = $request->input('group_id'); 
        $userList->first_name    = $request->input('first_name'); 
        $userList->last_name     = $request->input('last_name'); 
        $userList->email         = $request->input('email'); 
        $userList->status        = $request->input('status') == true ? '1' : 0; 
        $userList->update();
        return redirect()->route('userList.index')->with('status','User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userList = UserList::findOrFail($id);
        $userList->delete();
        return redirect()->back()->with('destroy','User Deleted Successully!');
    }
}
