@extends('admin.layouts.admin_master')

@section('content')
    <div class="app-inner-bar">
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                        <span>Create New Supplier</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('supplier.index') }}"
                    class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    Back
                </a>
            </div>
        </div>
    </div>
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="{{ route('supplier.store') }}" class="col-md-8 mx-auto"
                                            method="post">
                                            @csrf
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Name</span>
                                                </div>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                    name="name">
                                            </div>
                                            @error('name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Phone</span>
                                                </div>
                                                <input type="phone" class="form-control @error('name') is-invalid @enderror"
                                                    name="phone">
                                            </div>

                                            @error('phone')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Email
                                                        Address</span>
                                                </div>
                                                <input type="email" class="form-control" name="email">

                                                @error('email')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Customer
                                                        Custom Field_1</span>
                                                </div>
                                                <input type="text" class="form-control" name="field_1">

                                                @error('field_1')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Customer
                                                        Custom Field_2</span>
                                                </div>
                                                <input type="text" class="form-control" name="field_2">

                                                @error('field_2')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">
                                                    Submit
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
