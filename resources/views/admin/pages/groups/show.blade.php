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
                                        <h5 class="card-title">Show Group</h5>
                                        <a href="{{ route('group.index') }}" class="btn btn-danger btn-sm pull-right"><i
                                                class="fas fa-undo"></i></a>
                                        <form action="" class="col-md-10 mx-auto">
                                            <div class="form-group">
                                                <label for="mane">Name</label>
                                                <div>
                                                    <input type="name" class="form-control" name="name"
                                                        value="{{ $group_show->name }}" placeholder="Name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <div>
                                                    <input type="text" class="form-control" name="title"
                                                        value="{{ $group_show->title }}" placeholder="Title" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <div>
                                                    <input type="checkbox" name="status"
                                                        {{ $group_show->status == '1' ? 'checked' : '' }}>
                                                    0=Deactive,1=Active
                                                </div>
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
