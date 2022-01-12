@extends('admin.layouts.admin_master')

@section('content')
<div class="app-inner-bar">
    <div class="inner-bar-center">
        <ul class="nav">
            <li class="nav-item">
                <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                    <span>Create User</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="">
        <div class="btn-actions-pane-right">
            <a type="button" href="{{ route('userList.index') }}"
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
                                
                                        
                                        <form action="{{ route('userList.store') }}" class="col-md-8 mx-auto" method="post">
                                            @csrf
                                               {{-- Dropdown using for Group start --}}
                                               <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" for="group_id">Group</span>
                                                </div>
                                                <select name="group_id" id="group_id" class="form-control">
                                                    <option label="Choose Group"></option>
                                                    @foreach ($groups as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('group_id')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- Dropdown using for Group start --}}
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">First Name</span>
                                                </div>
                                                <input type="text" class="form-control" name="first_name">
                                            
                                                    @error('first_name')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Last Name</span>
                                                </div>
                                                <input type="text" class="form-control" name="last_name">
                                            
                                                    @error('last_name')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Email</span>
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
