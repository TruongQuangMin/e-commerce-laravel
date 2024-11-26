@extends('frontend.layouts.master')
@section('title', env('APP_NAME') . ' || INDEX')
@section('main-content')
    @include('frontend.layouts.header_fe')

    @php
        $svgContent = file_get_contents(public_path('frontend/svg/index.svg'));
        echo $svgContent;

    @endphp

    <section id="billboard" class="position-relative overflow-hidden bg-light-blue" style="padding: 100px 0px 20px; ;">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper" style="height: auto;">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <h1 class="display-2 text-uppercase text-dark pb-5">Macbook Pro 16 M2 2024</h1>
                                    {{-- <a href="shop" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a> --}}
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image-holder">
                                    <img src="{{ asset('frontend/images/macpro16m2gray.png') }}" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row d-flex flex-wrap align-items-center">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <h1 class="display-2 text-uppercase text-dark pb-5">Macbook Air 15 M3 2024</h1>
                                    {{-- <a href="shop" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a> --}}
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image-holder">
                                    <img src="{{ asset('frontend/images/macair15m3midnight.png') }}" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-icon swiper-arrow swiper-arrow-prev">
            <svg class="chevron-left" style="height:100px">
                <use xlink:href="#chevron-left" />
            </svg>
        </div>
        <div class="swiper-icon swiper-arrow swiper-arrow-next">
            <svg class="chevron-right" style="height:100px">
                <use xlink:href="#chevron-right" />
            </svg>
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
                            <p>Applicable to orders over $500</p>
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

    @php
        $parentCategories = \App\Models\Category::getParentCategories();
        $thirdCategory = $parentCategories[0];


        // $products = \App\Models\Product::getFirstFourProducts();

    @endphp

    {{-- @foreach ($parentCategories as $category) --}}
    <section id="{{ $thirdCategory->slug }}" class="product-store position-relative padding-large no-padding-top">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-dark text-uppercase">{{ $thirdCategory->title }} Products</h2>
                    <div class="btn-right">
                        <a href="{{ route('product-list', ['slug' => $thirdCategory->slug]) }}"
                            class="btn btn-medium btn-normal text-uppercase" style="text-decoration: none">Go to Shop</a>
                    </div>
                </div>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        @php
                            $products = \App\Models\Product::getFirstFourProducts($thirdCategory->title);
                        @endphp
                        @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="product-card position-relative">
                                    <div class="image-holder"
                                        style="background-color: #EDF1F3;
                                    border-radius: 10%;">
                                        <img src="{{ asset('frontend/images/macpro13m2sliver.png') }}" alt="product-item"
                                            class="img-fluid">
                                    </div>
                                    <div class="cart-concern position-absolute">
                                        <div class="cart-button d-flex">
                                            <a href="{{ route('product-detail', ['slug' => $product->slug]) }}" class="btn btn-medium btn-black">See more<svg
                                                    class="cart-outline">
                                                    <use xlink:href="#cart-outline"></use>
                                                </svg></a>
                                        </div>
                                    </div>

                                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                        <h3 class="card-title text-uppercase">
                                            <a
                                                href="{{ route('product-detail', ['slug' => $product->slug]) }}">{{ $product->title }}</a>
                                        </h3>
                                    </div>
                                    @php
                                        $priceRange = \App\Models\Attribute::getPriceRangeForSku($product->title);
                                    @endphp
                                    <h5 class="item-price text-primary">{{ $priceRange['minPrice'] }}$ -
                                        {{ $priceRange['maxPrice'] }}$
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    {{-- @endforeach --}}




    <section id="yearly-sale" class="bg-light-blue overflow-hidden mt-5 padding-xlarge"
        style="background-image: url('{{ asset('frontend/images/macpro13m2sliver.png') }}');background-position: right; background-repeat: no-repeat;">
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="text-content offset-4 padding-medium" style="margin-left: 20%;">
                    <h3>5% off all Store birthday products</h3>
                    <h2 class="display-2 pb-5 text-uppercase text-dark">Birthday Party</h2>
                    <a href="shop" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Sale</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">

            </div>
        </div>
    </section>
    <section id="latest-blog" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-dark text-uppercase">Technology news</h2>
                    <div class="btn-right">
                        <a href="{{ route('blog') }}" class="btn btn-medium btn-normal text-uppercase">Read Blog</a>
                    </div>
                </div>
                <div class="post-grid d-flex flex-wrap justify-content-between">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-sm-12">
                            <div class="card border-none me-3">
                                <div class="card-image">
                                    <img src="{{ $post->photo }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="card-body text-uppercase">
                                <div class="card-meta text-muted">
                                    <span class="meta-date">{{ $post->created_at->format('d/m/YY') }}</span>
                                </div>
                                <h3 class="card-title">
                                    <a href="{{ route('blog.detail', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="position-relative">
        <div class="container">
            <div class="row">
                <div class="review-content position-relative">
                    <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
                        <svg class="chevron-left">
                            <use xlink:href="#chevron-left" />
                        </svg>
                    </div>
                    <div class="swiper testimonial-swiper">
                        <div class="quotation text-center">
                            <svg class="quote">
                                <use xlink:href="#quote" />
                            </svg>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“Dedicated advice, excellent warranty service, fast delivery. If given the opportunity, I will support the store more”</blockquote>
                                    <div class="rating">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-half">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                        <svg class="star star-empty">
                                            <use xlink:href="#star-empty"></use>
                                        </svg>
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-dark text-uppercase pt-2">Nguyen Hang</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>"Macbook Pro 16 has just been announced for sale, but a few days later the shop has already sold it, the fastest import speed in Vietnam”</blockquote>
                                    <div class="rating">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-half">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                        <svg class="star star-empty">
                                            <use xlink:href="#star-empty"></use>
                                        </svg>
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-dark text-uppercase pt-2">Quan Hoang</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
                        <svg class="chevron-right">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <br>
    <br>
    <br>
    <br>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="script.js"></script>

    <script>
        function scrollToCategory(slug, event) {
            event.preventDefault();
            var target = document.getElementById(slug);

            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>

    {{-- thiếu dòng @endsection cho section maincontent sẽ bị mất head --}}
@endsection
