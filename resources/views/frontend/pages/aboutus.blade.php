@extends('frontend.layouts.master')

@section('title', env('APP_NAME') . ' || About Us')

@section('main-content')

@include('frontend.layouts.header_fe')


@php
    $svgContent = file_get_contents(public_path('frontend/svg/aboutus.svg'));
    echo $svgContent;
@endphp

{{-- Banner --}}
<section class="hero-section position-relative bg-light-blue padding-medium">
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="text-center padding-large no-padding-bottom">
                    <h1 class="display-2 text-uppercase text-dark">About Us</h1>
                    <div class="breadcrumbs">

                        <span class="item">MiniStore is the number 1 unit in the country creating great experiences for the process of shopping for all kinds of items on e-commerce platforms in Vietnam.
                            By 2023, it is expected that the number of people in Vietnam using Apple technology products will account for the largest market share compared to other brands.
                            We decided to separate the Apple technology product segment to create an e-commerce platform specializing in selling the latest Apple technology products.
                             After connecting and signing the contract, we became a trusted authorized partner of the world's leading reputable technology company, Apple.
                            Since then MiniStore was officially launched.
                             </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="company-services" class="padding-large">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 pb-3">
                <div class="icon-box d-flex">
                    <div class="icon-box-icon pe-3 pb-3">
                        <svg class="cart-outline">
              <use xlink:href="#cart-outline" />
            </svg>
                    </div>
                    <div class="icon-box-content">
                        <h3 class="card-title text-uppercase text-dark">Free delivery</h3>
                        <p>Applicable to orders over $500 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
                <div class="icon-box d-flex">
                    <div class="icon-box-icon pe-3 pb-3">
                        <svg class="quality">
              <use xlink:href="#quality" />
            </svg>
                    </div>
                    <div class="icon-box-content">
                        <h3 class="card-title text-uppercase text-dark">Quality guarantee</h3>
                        <p>100% genuine product, exclusive distributor of Apple</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
                <div class="icon-box d-flex">
                    <div class="icon-box-icon pe-3 pb-3">
                        <svg class="price-tag">
              <use xlink:href="#price-tag" />
            </svg>
                    </div>
                    <div class="icon-box-content">
                        <h3 class="card-title text-uppercase text-dark">Daily offers</h3>
                        <p>New products are always updated according to the market</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
                <div class="icon-box d-flex">
                    <div class="icon-box-icon pe-3 pb-3">
                        <svg class="shield-plus">
              <use xlink:href="#shield-plus" />
            </svg>
                    </div>
                    <div class="icon-box-content">
                        <h3 class="card-title text-uppercase text-dark">100% secure payment</h3>
                        <p>Ensure customer information security</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-us" class="padding-large no-padding-top">
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center justify-content-between">
            <div class="col-lg-6 col-md-12">
                <div class="image-holder mb-4">
                    <div>
                        <img src="{{ asset('frontend/images/single-image3.jpg') }}" alt="single" class="single-image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12" style="padding-left: 30px;">
                <div class="detail " style="padding-left: 10rem;">
                    <div class="display-header">
                        <h2 class="display-7 text-uppercase text-dark">Our Warranty Policies</h2>
                        <ul>
                            <strong style="font-size: 20px;"> 1. Apple's Standard Warranty Policy: </strong>
                            <li style="font-size: 15px;">Comply with Apple's warranty terms, applicable from the invoice date for customers</li>
                            <li style="font-size: 15px;">Reference the policy at Apple => <a style="color:#007edb" href="https://www.apple.com/legal/warranty/products/ios%E2%80%93of-apac-vietnamese.html">Link&nbsp;</a> </li>
                        </ul>
                    </div>
                    <div class="display-header">
                        <ul>
                            <strong style="font-size: 20px;"> 2. In case of product issues, customers can take the following actions: </strong>
                            <li style="font-size: 15px;">Option 1: Customers can contact and service their devices at Apple's authorized service centers in Vietnam</li>
                            <li style="font-size: 15px;">
                                <span style="font-size: 15px;">Option 2: </span>
                                <ul>
                                    <li style="font-size: 15px;"> Contact MiniStore (customer service hotline: 1999.9999)</li>
                                    <li style="font-size: 15px;">MiniStore will receive and send the device to Apple's authorized service centers in Vietnam for assessment and approval of the result, as well as the resolution method from Apple for customers </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<section id="our-store" class="padding-large no-padding-top">
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-lg-6">
                <div class="locations-wrap">
                    <div class="display-header">
                        <h2 class="display-7 text-uppercase text-dark">Contact Us</h2>
                        <p>You can contact us</p>
                    </div>
                    <div class="location-content d-flex flex-wrap">
                        <div class="col-lg-6 col-sm-12">
                            <div class="content-box text-dark pe-4 mb-5">
                                <h3 class="card-title text-uppercase text-decoration-underline">Office</h3>
                                <div class="contact-address pt-3">
                                    <p>55 Giai Phong, Hai Ba Trung District, Hanoi City, Vietnam</p>
                                </div>
                                <div class="contact-number">
                                    <p>
                                        <a href="#">+123 987 789</a>
                                    </p>
                                    <p>
                                        <a href="#">+123 123 321</a>
                                    </p>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">minhtqgcc200321@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="content-box text-dark pe-4 mb-5">
                                <h3 class="card-title text-uppercase text-decoration-underline">Office</h3>
                                <div class="contact-address pt-3">
                                    <p>55 Giai Phong, Hai Ba Trung District, Hanoi City, Vietnam</p>
                                </div>
                                <div class="contact-number">
                                    <p>
                                        <a href="#">+123 987 789</a>
                                    </p>
                                    <p>
                                        <a href="#">+123 123 321</a>
                                    </p>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">minhtqgcc200321@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-holder mb-5">
                    <img src="{{ asset('frontend/images/single-image2.jpg') }}" alt="our-store" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>

{{-- thiếu dòng @endsection cho section maincontent sẽ bị mất head --}}
@endsection


