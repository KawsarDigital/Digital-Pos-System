@extends('admin.layouts.admin_master')

@section('content')

<div class="app-inner-bar">
    <div class="inner-bar-center">
        <ul class="nav">
            <li class="nav-item">
                <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                    <span>Add Product</span>
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
                                        <form action="{{ route('product.store') }}" class="col-md-8 mx-auto" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            {{-- Dropdown using for Type start --}}
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" for="type_id">Type</span>
                                                </div>
                                                <select name="type_id" id="type_id" class="form-control">
                                                    <option label="Choose Type"></option>
                                                    @foreach ($types as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('type_id')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- Dropdown using for Type start --}}
                                            <br>
                                            {{-- Dropdown using for Brand start --}}
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" for="brand_id">Brand</span>
                                                </div>
                                                <select name="brand_id" id="brand_id" class="form-control">
                                                    <option label="Choose Brand"></option>
                                                    @foreach ($brands as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
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
                                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
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
                                                <input type="name" class="form-control" name="name">
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
                                                <input type="text" class="form-control" name="code">
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
                                                <input type="cost" class="form-control" name="cost">
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
                                                <input type="price" class="form-control" name="price">
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
                                                <input type="product_tax" class="form-control" name="product_tax">
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
                                                <input type="qty" class="form-control" name="qty">
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
                                                <input type="alert_qty" class="form-control" name="alert_qty">
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
                                                    <textarea name="details" class="form-control"></textarea>
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
                                                    <input type="file" class="form-control-file" name="image"
                                                        placeholder="image" />
                                                    @error('image')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="active" type="radio" name="status"
                                                        value="1">
                                                    <label class="form-check-label" for="active">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="deactive" type="radio" name="status"
                                                        value="0">
                                                    <label class="form-check-label" for="deactive">Deactive</label>
                                                </div>
                                                @error('status')
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
