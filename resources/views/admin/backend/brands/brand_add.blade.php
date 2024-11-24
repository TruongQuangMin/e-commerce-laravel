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
                                <h6 class="card-title">Add New Brand</h6>
                                <br>

                                <form method="POST" action="{{ route('brand.store') }}" id="brandForm"
                                    name="brandForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="categoryname" class="form-label">Brand Name</label>
                                            <input type="text" name="brand_name"
                                                class="form-control @error('brand_name') is-invalid @enderror"
                                                id="brand_name" autocomplete="on">
                                            @error('brand_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Description</label>
                                            <input type="text" name="brand_des"
                                                class="form-control @error('brand_des') is-invalid @enderror" id="brand_des"
                                                value="">
                                            @error('brand_des')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" name="brand_slug"
                                                class="form-control @error('brand_slug') is-invalid @enderror" id="brand_slug"
                                                value="">
                                            @error('brand_slug')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="brand_logo" class="form-label">Brand Logo</label>
                                            <input type="file" id="myDropify" name="brand_logo" />
                                            @error('brand_logo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Status</label>
                                            <select name="status" id="brand_status" class="form-select">
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
