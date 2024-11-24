@extends('admin.dashboard')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->

            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <h6 class="card-title">Add New Category</h6>
                                <br>

                                <form method="POST" action="{{ route('categories.store') }}" id="categoryForm"
                                    name="categoryForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="categoryname" class="form-label">Category Name</label>
                                            <input type="text" name="categoryname"
                                                class="form-control @error('categoryname') is-invalid @enderror"
                                                id="categoryname" autocomplete="on">
                                            @error('categoryname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" name="slug"
                                                class="form-control @error('slug') is-invalid @enderror" id="slug"
                                                value="">
                                            @error('slug')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Upload image</label>
                                            <input type="file" id="myDropify" name="image" />
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Block</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-secondary">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <!-- right wrapper end -->
        </div>
    </div>
@endsection

@section('customJs')
    
@endsection
