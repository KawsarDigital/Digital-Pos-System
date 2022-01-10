@extends('admin.layouts.admin_master')

@section('content')

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Edit Category</h5>
                                        <a href="{{ route('category.index') }}"
                                            class="btn btn-danger btn-sm pull-right"><i class="fas fa-undo"></i></a>
                                        <form action="{{ route('category.update', $category_edit->id) }}"
                                            class="col-md-10 mx-auto" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Title</span>
                                                </div>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ $category_edit->title }}">

                                                @error('title')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>

                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="input-group-prepend"><span class="input-group-text">Image
                                                        Upload</span>
                                                        <input type="file" class="form-control-file" name="image"
                                                        placeholder="image" />
                                                </div>
                                                </div>
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img src="{{ asset('uploads/categories/' . $category_edit->image) }}"
                                                        width="60px" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="active" type="radio" name="status"
                                                        value="1" {{ $category_edit->status == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="active">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="deactive" type="radio" name="status"
                                                        value="0" {{ $category_edit->status == '0' ? 'checked' : '' }}>
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
                                                    Update
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
