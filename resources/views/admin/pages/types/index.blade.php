@extends('admin.layouts.admin_master')

@section('content')

    <div class="app-inner-bar">
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                        <span>Type List</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('group.create') }}"
                    class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    Create New Type
                </a>
            </div>
            {{-- <a href="{{ route('group.create') }}" class="btn btn-success btn-lg pull-right">
                <i class="fas fa-plus"></i>
                <br>
            </a> --}}
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
                                        <table style="width: 100%;"
                                            class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Slug</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($group_item as $item)


                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>


                                                        <td>{{ $item->title }}</td>

                                                        <td style="text-transform: lowercase">{{ $item->slug }}</td>

                                                        <td>
                                                            @if ($item->status == '1')
                                                                Active

                                                            @else
                                                                Deactive
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('group.destroy', $item->id) }}"
                                                                method="POST">
                                                                <a href="{{ route('group.show', $item->id) }}">

                                                                    <button type="button" class="btn-xs btn btn-success"><i
                                                                            class="fas fa-eye"></i></i></button>
                                                                </a>
                                                                <a href="{{ route('group.edit', $item->id) }}">

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
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        {{-- Pagination start --}}
                        @if (count($group_item) > 0)
                        <span class="pull-right">
                            <ul class="pagination">
                                <li class=" @if ($group_item->appends(request()->query())->currentPage() == 1) disabled @endif">
                                    <a class="" href=" {{ $group_item->appends(request()->query())->url(1) }}">←
                                        First</a>
                                </li>
    
                                <li class=" @if ($group_item->appends(request()->query())->currentPage() == 1) disabled @endif">
                                    <a class=""
                                        href=" {{ $group_item->appends(request()->query())->previousPageUrl() }}"><i
                                            class="fa fa-angle-double-left"></i></a>
                                </li>
                                @foreach(range(1, $group_item->appends(request()->query())->lastPage()) as $i)
                                @if ($i >= $group_item->appends(request()->query())->currentPage() - 4 && $i <= $group_item->appends(request()->query())->currentPage() + 4)
                                    @if ($i == $group_item->appends(request()->query())->currentPage())
                                        <li class="active"><span>{{ $i }}</span></li>
                                    @else
                                        <li><a
                                                href="{{ $group_item->appends(request()->query())->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endif
                                @endif
                    @endforeach
    
                    <li class=" @if ($group_item->appends(request()->query())->lastPage() == $group_item->appends(request()->query())->currentPage()) disabled @endif">
                        <a class="" href=" {{ $group_item->appends(request()->query())->nextPageUrl() }}"><i
                                class="fa fa-angle-double-right"></i></a>
                    </li>
                    <li class=" @if ($group_item->appends(request()->query())->lastPage() == $group_item->appends(request()->query())->currentPage()) disabled @endif">
                        <a class=""
                            href=" {{ $group_item->appends(request()->query())->url($group_item->lastPage()) }}">Last
                            →</a>
                    </li>
                    </ul>
                    </span>
                    @endif
                    {{-- Pagination End --}}
    </div>
@endsection
