@extends('admin.layouts.admin_master')

@section('content')

    <div class="app-inner-bar">
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                        <span>Product List</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="">
            <a href="{{ route('product.create') }}" class="btn btn-info btn-lg pull-right">
                <i class="fas fa-plus"></i>
                <br>
            </a>
        </div>
    </div>
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    <br>
                    <div class="container-fluid">
                        @if (Session::has('status'))
                            <div>
                                <p class="alert alert-info">{{ Session::get('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true" style="font-size:20px">×</span>
                                    </button>
                                </p>
                            </div>

                        @endif
                        @if (Session::has('destroy'))
                            <div>
                                <p class="alert alert-danger">{{ Session::get('destroy') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true" style="font-size:20px">×</span>
                                    </button>
                                </p>
                            </div>

                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <table table style="width: 100%;" id="example"
                                        class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Category</th>
                                                    <th>Brand</th>
                                                    <th>Quantity</th>
                                                    <th>Cost</th>
                                                    <th>Price</th>
                                                    <th>Tax</th>
                                                    <th>Details</th>
                                                    <th>Alert Qty</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($product_item as $item)


                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>


                                                        <td>{{ $item->type_id }}</td>
                                                        <td>{{ $item->category_id }}</td>
                                                        <td>{{ $item->brand_id }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->cost }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->product_tax }}</td>
                                                        <td>{{ $item->Alert_qty }}</td>
                                                        <td>{{ $item->details }}</td>
                                                        <td>{{ $item->qty }}</td>
                                                        <td>{{$item->image}}</td>


                                                        {{-- <td>
                                                            <img src="{{ asset('uploads/categories/' . $item->image) }}"
                                                                width="40px" height="40px" alt="">
                                                        </td> --}}

                                                        {{-- <td>
                                                            @if ($item->status == '1')
                                                                Active

                                                            @else
                                                                Deactive
                                                            @endif
                                                        </td> --}}
                                                        <td>
                                                            <form action="{{ route('product.destroy', $item->id) }}"
                                                                method="POST">
                                                                <a href="{{ route('product.show', $item->id) }}">

                                                                    <button type="button" class="btn-xs btn btn-info"><i
                                                                            class="fas fa-eye"></i></i></button>
                                                                </a>
                                                                <a href="{{ route('product.edit', $item->id) }}">

                                                                    <button type="button" class="btn-xs btn btn-primary"><i
                                                                            class="far fa-edit"></i></button>
                                                                </a>

                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="btn-xs btn btn-danger" type="submit"
                                                                    onclick="return confirm('Are You Sure To Deleted !')">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Category</th>
                                                    <th>Brand</th>
                                                    <th>Quantity</th>
                                                    <th>Cost</th>
                                                    <th>Price</th>
                                                    <th>Tax</th>
                                                    <th>Details</th>
                                                    <th>Alert Quantity</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
