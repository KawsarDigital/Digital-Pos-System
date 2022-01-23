@extends('admin.layouts.admin_master')

@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    <br>
                    <div id="success_message">

                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="#" class="col-md-12 mx-auto" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <select name="customer_id" id="customerStore" class="form-control">
                                                    <option value="0">Choose Customer</option>
                                                    @foreach ($customer_list as $item)
                                                        <option value="{{ $item->id }}" }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-group-addon no-print" style="padding: 2px 5px;">
                                                    <a type="button" data-toggle="modal" data-target="#customerAdd"
                                                        class="btn-icon btn-wide btn-outline-2x btn btn-outline-success btn-sm d-flex">
                                                        <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                                    </a>
                                                </div>

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
                                        {{-- <table class="table table-striped table-condensed table-hover list-table"
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
                                        </table> --}}
                                        <br>
                                        <div class="slimScrollDiv"
                                            style="position: relative; overflow: hidden; width: auto; height: 250px;">
                                            <div id="list-table-div" style="overflow: hidden; width: auto; height: 76px;">
                                                <div class="fixed-table-header">
                                                    <table
                                                        class="table table-striped table-condensed table-hover list-table"
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
                                                        <tbody>
                                                            <tr class="success">
                                                                {{-- <td>Product</td> --}}
                                                                <td style="width: 15%;text-align:center;"><label id="name">name</label></td>
                                                                <td style="width: 15%;text-align:center;"><label for="">price</label></td>
                                                                <td style="width: 20%;text-align:center;">
                                                                    <label for="">qty</label>

                                                                </td>
                                                                <td style="width: 20%;text-align:center;">total</td>
                                                                <td style="width: 20px;" class="satu"><i
                                                                        class="fas fa-trash-alt"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="totaldiv">
                                            <table id="totaltbl" class="table table-condensed totals"
                                                style="margin-bottom:10px;">
                                                <tbody>
                                                    <tr class="info">
                                                        <td width="25%">Total Items</td>
                                                        <td class="text-right" style="padding-right:10px;"><span
                                                                id="count">0 (0.00)</span></td>
                                                        <td width="25%">Total</td>
                                                        <td class="text-right" colspan="2"><span id="total">0.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="info">
                                                        <td width="25%"><a href="#" id="add_discount">Discount</a></td>
                                                        <td class="text-right" style="padding-right:10px;"><span
                                                                id="ds_con">(0.00) 0.00</span></td>
                                                        <td width="25%"><a href="#" id="add_tax">Order Tax</a></td>
                                                        <td class="text-right"><span id="ts_con">0.00</span></td>
                                                    </tr>
                                                    <tr class="success">
                                                        <td colspan="2" style="font-weight:bold;">
                                                            Total Payable <a role="button" data-toggle="modal"
                                                                data-target="#noteModal">
                                                                <i class="fa fa-comment"></i>
                                                            </a>
                                                        </td>
                                                        <td class="text-right" colspan="2" style="font-weight:bold;">
                                                            <span id="total-payable">0.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div id="botbuttons" class="col-md-12 text-center">
                                            <div class="row">
                                                <div class="col-md-4" style="padding: 0;">
                                                    <div class="btn-group-vertical btn-block">
                                                        <button type="button" class="btn btn-warning btn-block btn-flat"
                                                            id="suspend">Hold</button>
                                                        <button type="button" class="btn btn-danger btn-block btn-flat"
                                                            id="reset">Cancel</button>
                                                    </div>

                                                </div>
                                                <div class="col-md-4" style="padding: 0 5px;">
                                                    <div class="btn-group-vertical btn-block">
                                                        <button type="button"
                                                            class="btn bg-purple btn-info btn-block btn-flat"
                                                            id="print_order">Print Order</button>

                                                        <button type="button"
                                                            class="btn bg-navy btn-primary btn-block btn-flat"
                                                            id="print_bill">Print Bill</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="padding: 0;">
                                                    <button type="button" class="btn btn-success btn-block btn-flat"
                                                        id="payment" style="height:67px;">Payment</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <div>
                                                @foreach ($product_item as $item)
                                                    <input type="hidden" id="pro_id" value="{{ $item->id }}">
                                                    <input type="hidden" id="pro_price" value="{{ $item->price }}">
                                                    <input type="hidden" id="pro_name" value="{{ $item->name }}">
                                                    <input type="hidden" id="pro_qty" value="{{ $item->qty }}">

                                                    <button type="button" data-name="Minion Hi" id="product_added"
                                                        value="TOY01" class="btn btn-both btn-flat product">
                                                        <span class="bg-img"><img
                                                                src="{{ asset('uploads/products/' . $item->image) }}"
                                                                alt="product_added" style="width: 100px; height: 100px;"
                                                                class="rounded">
                                                        </span>
                                                        <div>
                                                            <span>{{ $item->code }}</span>
                                                        </div>
                                                    </button>
                                                @endforeach
                                            </div>

                                        </div>

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

                    <ul id="error_list">

                    </ul>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Name</span>
                        </div>
                        <input type="text" class="form-control name @error('name') is-invalid @enderror" id="name">
                    </div>
                    <span class="text-danger" id="nameError"></span>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Phone</span>
                        </div>
                        <input type="phone" class="form-control phone @error('name') is-invalid @enderror" id="phone">
                    </div>

                    <span class="text-danger" id="phoneError"></span>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Email
                                Address</span>
                        </div>
                        <input type="email" class="form-control email" id="email">

                        <span class="text-danger" id="emailError"></span>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Customer
                                Custom Field_1</span>
                        </div>
                        <input type="text" class="form-control field_1" id="field_1">

                        <span class="text-danger" id="field_1Error"></span>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Customer
                                Custom Field_2</span>
                        </div>
                        <input type="text" class="form-control field_2" id="field_2">

                        <span class="text-danger" id="field_2Error"></span>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success add_customer">Add
                            Customer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {

        //==================== Add Product ajax Start ========================

        $(document).on('click', '#product_added', function(e) {
            e.preventDefault();

            let id = $('#pro_id').val();
            let pro_name = $('#pro_name').val();
            let pro_price = $('#pro_price').val();
            let pro_qty = $('#pro_qty').val();

            $('#name').val(pro_name);
            $('#price').val(pro_price);
            $('#price').val(pro_qty);


            console.log(id, pro_name, pro_price,pro_qty);

        });

        //==================== Add Product ajax End ========================

        //==================== Add Customer ajax Start ========================

        $(document).on('click', '.add_customer', function(event) {
            event.preventDefault();
            var data = {
                'name': $('.name').val(),
                'phone': $('.phone').val(),
                'email': $('.email').val(),
                'field_1': $('.field_1').val(),
                'field_2': $('.field_2').val()
            }

            $.ajax({
                type: "POST",
                dataType: "json",
                data: data,
                url: "customers",
                success: function(response) {

                    if (response.status == 400) {
                        $('#error_list').html("");
                        $('#error_list').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#error_list').append('<li>' + err_values +
                                '</li>');
                        });
                    } else {
                        $('#error_list').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#customerAdd').find('input').val("");
                        $('#customerAdd').modal();

                    }
                }
            });

        });
    });

    //==================== Add Customer ajax End ========================



    //==================== Add Product view ajax Start ========================

    // fetchProduct();

    // function fetchProduct() {
    //     $.ajax({
    //         type: "GET",
    //         dataType: "json",
    //         url: "products/index",
    //         success: function(response) {

    //             console.log(response.products);
    //             $('tbody').html("");
    //             $.each(response.products, function(key, value) {
    //                 $('tbody').append('<tr>\
    //                                                         <td>' + value.name + '</td>\
    //                                                         <td>' + value.price + '</td>\
    //                                                         <td>' + value.qty + '</td>\
    //                                                         <td>' + value.price + '</td>\
    //                                                         <td> <button type="button" value="'+value.id+'" class="btn btn-danger btn-sm delete_button" ><i class="fas fa-trash-alt"></i></button></td>\
    //                                                     </tr>');
    //             });

    //         }
    //     });
    // }


    //==================== Add Product view ajax Start ========================
</script>
@endsection
