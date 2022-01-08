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
                                        <h5 class="card-title">Add Brand</h5>
                                   
                                        <a href="{{ route('brand.index') }}" class="btn btn-danger btn-sm pull-right"><i
                                                class="fas fa-undo"></i></a>
                                        
                                        <form action="{{ route('brand.store') }}" class="col-md-10 mx-auto" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <div>
                                                    <input type="text" class="form-control" name="title"
                                                        placeholder="Title" />
                                                        @error('title')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <div>
                                                    <input type="checkbox" name="status"> 0=Deactive,1=Active
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info">
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
