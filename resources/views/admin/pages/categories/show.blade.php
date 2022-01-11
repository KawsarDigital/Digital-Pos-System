@extends('admin.layouts.admin_master')

@section('content')
<div class="app-inner-bar">
    <div class="inner-bar-center">
        <ul class="nav">
            <li class="nav-item">
                <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                    <span>Show Category</span>
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
                                        {{-- <h5 class="card-title">Show Category</h5>
                                        <a href="{{ route('category.index') }}"
                                            class="btn btn-danger btn-sm pull-right"><i class="fas fa-undo"></i></a> --}}
                                        <form action="" class="col-md-8 mx-auto">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Title</span>
                                                </div>
                                                <input type="text" readonly class="form-control" name="title"
                                                    value="{{ $category_show->title }}">

                                                @error('title')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Slug</span>
                                                </div>
                                                <input type="text" readonly class="form-control" name="slug"
                                                    value="{{ $category_show->slug }}">

                                                @error('slug')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="input-group-prepend"><span class="input-group-text">Image
                                                        View</span>
                                                     
                                                </div>
                                                </div>
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img src="{{ asset('uploads/categories/' . $category_show->image) }}"
                                                        width="60px" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="active" type="radio" name="status" readonly
                                                        value="1" {{ $category_show->status == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="active">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input readonly class="form-check-input" id="deactive" type="radio" name="status"
                                                        value="0" {{ $category_show->status == '0' ? 'checked' : '' }}>
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
