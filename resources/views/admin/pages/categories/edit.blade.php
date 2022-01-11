@extends('admin.layouts.admin_master')

@section('content')
    <div class="app-inner-bar">
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                        <span>Edit Category</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('category.index') }}"
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

                                        <form action="{{ route('category.update', $category_edit->id) }}"
                                            class="col-md-10 mx-auto" method="POST" enctype="multipart/form-data">
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
