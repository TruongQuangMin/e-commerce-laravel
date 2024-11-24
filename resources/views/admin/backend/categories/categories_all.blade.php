@extends('admin.dashboard')

@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('categories.add') }}" class="btn btn-info"> + Add New Category</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <br>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th style="padding-left: 50px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cat as $cats => $item )
                                    <tr>
                                        <td>{{ $item -> id}}</td>
                                        <td>{{ $item -> category_name}}</td>
                                        <td>{{ $item -> slug}}</td>
                                        <td>
                                            <img src="{{ asset('upload/categories/'. $item->category_photo) }}" style="width: 70px; height: 70px;" />
                                        </td>
                                        <td>{{ $item -> status}}</td>
                                        <td>
                                            <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                            
                                            <a href="{{ route('categories.delete', $item->id) }}" class="btn btn-danger">Delete</a>
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
@endsection
