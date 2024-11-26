<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/profile-user.css') }}">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    @if (session('success'))
        <div class="alert alert-success alert-dismissable fade show">
            <button class="close" data-dismiss="alert" aria-label="Close">×</button>
            {{ session('success') }}
        </div>
    @endif


    @if (session('error'))
        <div class="alert alert-danger alert-dismissable fade show">
            <button class="close" data-dismiss="alert" aria-label="Close">×</button>
            {{ session('error') }}
        </div>
    @endif
    <div class="container">

        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
            </ol>
        </nav>

        <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-pills nav-gap-y-1">
                            <a href="#profile" data-toggle="tab"
                                class="nav-item nav-link has-icon nav-link-faded active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>Personal information

                            </a>

                            <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>Change password
                            </a>
                            <a href="#address" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>Delivery address
                            </a>

                            <a href="#order-list" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>Order List
                            </a>


                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-shield">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#address" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#order-list" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34">
                                        </path>
                                        <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                    </svg></a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="profile">
                            <h6>YOUR PROFILE INFORMATION</h6>
                            <form action="{{ route('update.profile') }}" method="POST">
                                @csrf
                                <hr>
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" name='name' id="fullName"
                                        aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                        value="{{ $user->name }}">
                                    <small id="fullNameError" class="form-text text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email"
                                        aria-describedby="emailHelp" placeholder="Enter your username"
                                        value="{{ $user->email }}" readonly>
                                    <small id="emailHelp" class="form-text text-muted">You cannot change a previously set email</small>
                                </div>

                                <button type="submit" id="update-profile-btn" class="btn btn-primary">Update
                                    Profile</button>
                                {{-- <button type="reset" class="btn btn-light">Reset Changes</button> --}}
                            </form>
                        </div>

                        <div class="tab-pane" id="security">
                            <h6>Change Password</h6>
                            <hr>
                            <form action="{{ route('change.password') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="d-block">Change Password</label>
                                    <input type="password" name="current_password" id="old-password"
                                        class="form-control" placeholder="Enter your old password">
                                    <input type="password" name="new_password" id="new-password-1"
                                        class="form-control mt-1" placeholder="New password">
                                    <input type="password" name="new_confirm_password" id="new-password-2"
                                        class="form-control mt-1" placeholder="Confirm new password">
                                    <small id="password-error" class="form-text text-danger"></small>
                                </div>
                                <button type="submit" id="update-password-btn" class="btn btn-primary">Update
                                    Password</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="address">
                            <h6>My Address</h6>
                            <hr>

                            <div class="form-group">
                                <button class="btn btn-info" type="button" onclick="showAddressCard()">Add Shipping Address</button>
                            </div>
                            <form action="{{ route('address.add') }}" method="POST">
                                @csrf
                                <div class="form-group" id="address-card" style="display: none;">
                                    <label for="address">Shipping Address:</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="full-name">Full Name:</label>
                                                <input type="text" class="form-control" name="address_name" id="full-name" placeholder="Enter full name" required>
                                                <div class="invalid-feedback" id="full-name-error"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone Number:</label>
                                                <input type="tel" class="form-control" id="phone" name="address_phone_number" placeholder="Enter phone number" title="Please enter a valid phone number (10 to 12 digits)" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="address_email" name="address_email" placeholder="Enter email" title="Please enter an email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="address-detail">Detailed Address:</label>
                                                <input type="text" class="form-control" id="address_detail" name="address_detail" placeholder="Enter detailed address" required>
                                                <div class="invalid-feedback" id="address-detail-error"></div>
                                                <small id="addressHelp" class="form-text text-muted">Enter detailed address: house number, district/ward, city/province</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Gender</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="flexRadioDefault1" checked
                                                        value="{{ \App\Models\CustomerAddress::GENDER_FEMALE }}">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="flexRadioDefault2"
                                                        value="{{ \App\Models\CustomerAddress::GENDER_MALE }}">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @if (empty($addressList))
                                <div class="form-group mb-0">
                                    <label class="d-block">No address yet? Let's create a new address</label>
                                </div>
                            @else
                                <div class="form-group mb-0">
                                    <label class="d-block">Address is available</label>
                                    <div id="existing-addresses"
                                        class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm list_contact">
                                        @foreach ($addressList as $addressItem)
                                            <div class="address-item">
                                                <div class="item">
                                                    <input type="radio" data-id="{{ $addressItem->id }}"
                                                        @if ($addressItem->is_default == 1) checked @endif
                                                        id="use_{{ $addressItem->id }}" name="use"
                                                        value="{{ $addressItem->id }}">
                                                </div>
                                                <label for="use_{{ $addressItem->id }}">
                                                    {{ $addressItem->name }} - {{ $addressItem->phone_number }} -
                                                    {{ $addressItem->detail_address }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            @endif
                        </div>


                        <div class="tab-pane" id="order-list">
                            @include('frontend.pages.order-list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('frontend/js/user_profile.js') }}"></script>
</body>

</html>
