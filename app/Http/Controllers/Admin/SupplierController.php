<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Supplier;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplierList = Supplier::latest()->paginate(10);
        return view('admin.pages.users.supplier.index',compact('supplierList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.users.supplier.create');
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

        $supplierStore = new Supplier();
        $supplierStore->name = $request->input('name');
        $supplierStore->phone = $request->input('phone');
        $supplierStore->email = $request->input('email');
        $supplierStore->field_1 = $request->input('field_1');
        $supplierStore->field_2 = $request->input('field_2');
        $supplierStore->save();
        return redirect()->route('supplier.index')->with('status','Supplier Added Successfully!');
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
        $supplier_edit = Supplier::findOrFail($id);
        return view('admin.pages.users.supplier.edit',compact('supplier_edit'));
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
        $supplierStore = Supplier::findOrFail($id);
        $supplierStore->name = $request->input('name');
        $supplierStore->phone = $request->input('phone');
        $supplierStore->email = $request->input('email');
        $supplierStore->field_1 = $request->input('field_1');
        $supplierStore->field_2 = $request->input('field_2');
        $supplierStore->update();
        return redirect()->route('supplier.index')->with('status','Supplier Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplierDestroy = Supplier::findOrFail($id);
        $supplierDestroy->delete();
        return redirect()->back()->with('destroy','Supplier Deleted Successfully!');
    }
}
