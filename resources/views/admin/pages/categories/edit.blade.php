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
                                        <a href="{{ route('category.index') }}" class="btn btn-danger btn-sm pull-right"><i
                                                class="fas fa-undo"></i></a>
                                        <form action="{{ route('category.update',$category_edit->id) }}"
                                            class="col-md-10 mx-auto" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <div>
                                                    <input type="text" class="form-control" name="title"
                                                        value="{{ $category_edit->title }}" placeholder="Title" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mane">Slug</label>
                                                <div>
                                                    <input type="slug" class="form-control" name="slug"
                                                        value="{{ $category_edit->slug }}" placeholder="Slug" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Image Upload</label>
                                                <input type="file" name="image" value="{{ $category_edit->image }}"
                                                    class="form-control">
                                                <img src="{{ asset('uploads/categories/' . $category_edit->image) }}" width="60px" alt="">
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <div>
                                                    <input type="checkbox" name="status"
                                                        {{ $category_edit->status == '1' ? 'checked' : '' }}>
                                                    0=Deactive,1=Active
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info">
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
