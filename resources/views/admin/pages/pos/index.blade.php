@extends('admin.layouts.admin_master')

@section('content')

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="#" class="col-md-12 mx-auto" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <select name="customer_id" id="customer_id" class="form-control">

                                                    <option label="Choose Customer"></option>

                                                </select>
                                                <div class="input-group-addon no-print" style="padding: 2px 5px;">
                                                    <a type="button" data-toggle="modal" data-target="#customerAdd"
                                                        class="btn-icon btn-wide btn-outline-2x btn btn-outline-success btn-sm d-flex">
                                                        <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                                    </a>
                                                </div>


                                                @error('category_id')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>

                                            <div class="input-group">
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="Reference Note ">
                                                @error('title')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="Search Product by name ">
                                                @error('title')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                        </form>
                                        <table class="table table-striped table-condensed table-hover list-table"
                                            style="margin:0;">
                                            <thead>
                                                <tr class="success">
                                                    <th>Product</th>
                                                    <th style="width: 15%;text-align:center;">Price</th>
                                                    <th style="width: 15%;text-align:center;">Qty</th>
                                                    <th style="width: 20%;text-align:center;">Subtotal</th>
                                                    <th style="width: 20px;" class="satu"><i
                                                            class="fas fa-trash-alt"></i></th>
                                                </tr>
                                            </thead>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">

                                <div class="main-card mb-3 card">
                                    <div class="card-body">


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Customer add with modal --}}

    <!-- Modal -->

@endsection
@section('modal')
    <div class="modal fade" id="customerAdd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id=addform>
                        @csrf
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Name</span>
                            </div>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        </div>
                        @error('name')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Phone</span>
                            </div>
                            <input type="phone" class="form-control @error('name') is-invalid @enderror" name="phone">
                        </div>

                        @error('phone')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Email
                                    Address</span>
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
                            <div class="input-group-prepend"><span class="input-group-text">Customer
                                    Custom Field_1</span>
                            </div>
                            <input type="text" class="form-control" name="field_1">

                            @error('field_1')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Customer
                                    Custom Field_2</span>
                            </div>
                            <input type="text" class="form-control" name="field_2">

                            @error('field_2')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
    <script>
        $(document).ready(function() {

            $("#addform").on('submit', function(e) {
                e.preventDefault();
                alert('kawsar');


                // $ajax({
                //     type: "POST";
                //     url: "customer"
                //     data: $("#addform").serialize(),
                //     success:: function(response) {
                //         console.log(response)
                //         $("#customerAdd").modal('hide')
                //         alert('Data Seved');
                //     },
                //     error: function(error) {
                //         console.log(error)
                //         alert('Date Not Seved');
                //     }
                // });

            });

        });
    </script>
@endsection
