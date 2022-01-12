@extends('admin.layouts.admin_master')

@section('content')
    <div class="app-inner-bar">
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                        <span>Show Product</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('product.index') }}"
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
                                        {{-- <h5 class="card-title">Show Product</h5>

                                        <a href="{{ route('product.index') }}" class="btn btn-danger btn-sm pull-right"><i
                                                class="fas fa-undo"></i></a> --}}

                                        <form action="" class="col-md-8 mx-auto">
                                            {{-- Dropdown using for Type start --}}
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" for="type_id">Type</span>
                                                </div>
                                                <select name="type_id" id="type_id" class="form-control">
                                                    <option label="Choose Type"></option>
                                                    @foreach ($types as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $product_show->type_id ? 'selected' : '' }}
                                                            readonly>
                                                            {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('type_id')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- Dropdown using for Type end --}}
                                            <br>
                                            {{-- Dropdown using for Brand start --}}
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" for="brand_id">Brand</span>
                                                </div>
                                                <select name="brand_id" id="brand_id" class="form-control">
                                                    <option label="Choose Brand"></option>
                                                    @foreach ($brands as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $product_show->brand_id ? 'selected' : '' }}
                                                            readonly>
                                                            {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('brand_id')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- Dropdown using for Brand end --}}
                                            <br>
                                            {{-- Dropdown using for Category start --}}
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" for="category_id">Category</span>
                                                </div>
                                                <select name="category_id" id="category_id" class="form-control">
                                                    <option label="Choose category"></option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $category->id == $product_show->category_id ? 'selected' : '' }}
                                                            readonly>
                                                            {{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- Dropdown using for Category end --}}
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Name</span>
                                                </div>
                                                <input type="name" class="form-control" name="name"
                                                    value="{{ $product_show->name }}" readonly>
                                                @error('name')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Code</span>
                                                </div>
                                                <input type="text" class="form-control" name="code"
                                                    value="{{ $product_show->code }}" readonly>
                                                @error('code')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Cost</span>
                                                </div>
                                                <input type="cost" class="form-control" name="cost" readonly
                                                    value="{{ $product_show->cost }}">
                                                @error('cost')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Price</span>
                                                </div>
                                                <input type="price" class="form-control" readonly name="price"
                                                    value="{{ $product_show->price }}">
                                                @error('price')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>

                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Product
                                                        Tax</span>
                                                </div>
                                                <input type="product_tax" class="form-control" readonly
                                                    value="{{ $product_show->product_tax }}" name="product_tax">
                                                @error('product_tax')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>

                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">Quantity</span>
                                                </div>
                                                <input type="qty" class="form-control" name="qty" readonly
                                                    value="{{ $product_show->qty }}">
                                                @error('qty')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>

                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Alert
                                                        Quantity</span>
                                                </div>
                                                <input type="alert_qty" class="form-control" readonly name="alert_qty"
                                                    value="{{ $product_show->alert_qty }}">
                                                @error('alert_qty')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>

                                            <div class="input-group">

                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">Details</span>
                                                </div>
                                                <div>
                                                    <textarea name="details" readonly
                                                        class="form-control">{{ $product_show->details }}</textarea>
                                                    @error('details')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <br>

                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Image
                                                        Upload</span>
                                                </div>
                                                <div>

                                                    @error('image')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                                <img src="{{ asset('uploads/products/' . $product_show->image) }}"
                                                    width="50px" alt="" class="rounded">
                                            </div>
                                            <br>
                                            <div class="input-group text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="active" type="radio" name="status"
                                                        value="1" readonly
                                                        {{ $product_show->status == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="active">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="deactive" type="radio" name="status"
                                                        value="0" readonly
                                                        {{ $product_show->status == '0' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="deactive">Deactive</label>
                                                </div>
                                                @error('status')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
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
