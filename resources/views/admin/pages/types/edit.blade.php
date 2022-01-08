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
                                        <h5 class="card-title">Edit Type</h5>
                                        <a href="{{ route('group.index') }}" class="btn btn-danger btn-sm pull-right"><i
                                                class="fas fa-undo"></i></a>
                                        <form action="{{ route('group.update', $group_edit->id) }}"
                                            class="col-md-10 mx-auto" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <div>
                                                    <input type="text" class="form-control" name="title"
                                                        value="{{ $group_edit->title }}" placeholder="Title" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mane">Slug</label>
                                                <div>
                                                    <input type="slug" class="form-control" name="slug"
                                                        value="{{ $group_edit->slug }}" placeholder="Slug"
                                                        style="text-transform: lowercase" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <div>
                                                    <input type="checkbox" name="status"
                                                        {{ $group_edit->status == '1' ? 'checked' : '' }}>
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
