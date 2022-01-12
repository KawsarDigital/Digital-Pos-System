<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerList = Customer::latest()->paginate(10);
        return view('admin.pages.users.customer.index',compact('customerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.users.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'name'=> 'required',
            'phone' => 'required|min:8|max:11'
        ];
        $this->validate($request,$rules);

        $customerStore = new Customer();
        $customerStore->name = $request->input('name');
        $customerStore->phone = $request->input('phone');
        $customerStore->email = $request->input('email');
        $customerStore->field_1 = $request->input('field_1');
        $customerStore->field_2 = $request->input('field_2');
        $customerStore->save();
        return redirect()->route('customer.index')->with('status','Customer Added Successfully!');
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
        $customer_edit = Customer::findOrFail($id);
        return view('admin.pages.users.customer.edit',compact('customer_edit'));
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
        
        $customerStore = Customer::findOrFail($id);
        $customerStore->name = $request->input('name');
        $customerStore->phone = $request->input('phone');
        $customerStore->email = $request->input('email');
        $customerStore->field_1 = $request->input('field_1');
        $customerStore->field_2 = $request->input('field_2');
        $customerStore->update();
        return redirect()->route('customer.index')->with('status','Customer Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerDestroy = Customer::findOrFail($id);
        $customerDestroy->delete();
        return redirect()->back()->with('destroy','Customer Deleted Successfully!');
    }
}
