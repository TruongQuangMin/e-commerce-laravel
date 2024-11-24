@extends('admin.dashboard')

@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="" class="btn btn-info"> + Add New Brand</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Brands</h5>
                        <br>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Brand Name</th>
                                        <th>Slug</th>
                                        <th>Logo</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th style="padding-left: 50px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand => $item )
                                    <tr>
                                        <td>{{ $item -> id}}</td>
                                        <td>{{ $item -> brand_name}}</td>
                                        <td>{{ $item -> brand_slug}}</td>
                                        <td>
                                            <img src="{{ asset('upload/brands/'. $item->category_photo) }}" style="width: 70px; height: 70px;" />
                                        </td>
                                        <td>{{ $item -> brand_description}}</td>
                                        <td>{{ $item -> brand_status}}</td>
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
