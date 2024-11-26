@extends('frontend.layouts.master')

@section('title', env('APP_NAME') . ' || Product Detail')

@section('main-content')
@include('frontend.layouts.header_fe')

@php
    $svgContent = file_get_contents(public_path('frontend/svg/product.svg'));
    echo $svgContent;
@endphp

<section id="selling-product" class="single-product padding-xlarge">
    <div class="container">

        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="product-preview mb-3">
                    <img alt="single-product" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <div class="element-header">
                        <h3 itemprop="name" class="display-7 text-uppercase">{{$productDetail->title}}</h3>
                    </div>
                    <div class="product-price pt-3 pb-3">
                        <strong class="text-primary display-6 fw-bold price-product">{{$productDetail->price}}</strong>
                    </div>
                    {{strip_tags($productDetail->summary)}}
                    {{-- <table class="data-table" style="margin: 0px; padding: 0px; width: 1200px; color: rgb(119, 119, 119); font-family: Arial; font-size: 15px;"><tbody style="margin: 0px; padding: 0px;"><tr class="odd" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">Dung lượng</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">256GB</td></tr><tr class="even" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px;">Màn hình</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px;">6.7″Super Retina XDR display</td></tr><tr class="odd" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">Độ phân giải màn hình</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">2796 ‑ x 1290 pixel ở 460 ppi</td></tr><tr class="even" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px;">Camera trước</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px;">12MP, khẩu độ ƒ / 1.9</td></tr><tr class="odd" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">Pin</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">Phát video lên tới 29 giờ (theo Apple)</td></tr><tr class="even" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px;">Sạc</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px;">Sạc không dây MagSafe và Qi</td></tr><tr class="odd" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">Kết nối mạng</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">2 SIM (1 Nano SIM và 1 eSIM hoặc 2 eSIM), hỗ trợ 5G</td></tr><tr class="even" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px;">Chip</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px;">Chip A16 Bionic,CPU 6 nhân, GPU 5 lõi, 16-core Neural Engine</td></tr><tr class="odd" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">RAM</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">6GB</td></tr><tr class="even" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px;">Bảo mật</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px;">Face ID, Được kích hoạt bởi camera trước TrueDepth để nhận dạng khuôn mặt</td></tr><tr class="odd" style="margin: 0px; padding: 0px;"><td class="spec-name" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 8px 0px 0px 8px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">Chống nước</td><td class="spec-value" style="margin: 0px; padding: 10px; border: 0px; color: rgb(29, 29, 31); border-radius: 0px 8px 8px 0px; font-size: 13px; line-height: 20px; background: rgb(245, 245, 247); width: 599.5px;">IP68 (độ sâu tối đa 6 mét trong tối đa 30 phút) theo tiêu chuẩn IEC 60529</td></tr></tbody></table> --}}
                    <form action="{{route('single-add-to-cart')}}" method="POST">
                    @csrf
                        <div class="cart-wrap padding-small">
                            <div class="color-options product-select">
                                <div class="color-toggle" data-option-index="0">
                                    <h4 class="item-title text-uppercase text-dark text-decoration-underline">Color:</h4>
                                    <ul class="select-list list-unstyled d-flex product-color" id="color-list">
                                        @php
                                            $listColor = App\Models\Attribute::where('product_id', $productDetail->id)->get();
                                        @endphp
                                        @foreach($listColor as $color )
                                        <input type="hidden" name="sku" class="sku-product" value="{{$color->sku}}">
                                        <li class="select-item color-product pe-3" data-val="{{$color->sku}}" data-color="{{$color->color}}">
                                            {{-- <a href="#">{{$color->color}}</a> --}}
                                            <span class=" active photo-attr"  data-pic="{{ $productDetail->photo }}" style="background-color: {{$color->color}};">
                                                <a href="#"></a>
                                            </span>
                                        </li>
                                        @endforeach
                                    </ul>
                                    {{-- <ul class="select-list list-unstyled d-flex product-color">
                                        <li class="select-item pe-3" data-val="Cream" title="Cream">
                                            <span class="cream active photo-attr" data-color="#f4e9d4" data-pic="{{ $productDetail->photo }}"></span>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                            <div class="product-quantity" style="padding-top: 20px">
                                {{-- <div class="stock-number text-dark stock-product"></div> --}}
                                <div class="container text-center" style="padding: 0px">
                                    <div class="row row-cols-auto">
                                      <div class="col" style=" "> <h5>IN STOCK :</h5></div>
                                      <div class="col stock-number text-dark stock-product"></div>
                                    </div>
                                </div>
                                <div class="stock-button-wrap pt-3">

                                    <div class="input-group product-qty">

                                                <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field="quant[1]">
                                            -
                                            </button>
                                        </span>
                                                <input type="text" id="quantity" name="quant[1]" class="form-control input-number" data-min="1"
                                                data-max="1000" value="1">
                                                <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="quant[1]">
                                                +
                                             </button>
                                        </span>
                                    </div>
                                    @guest
                                        <div class="qty-button d-flex flex-wrap pt-3 btn-add-to-cart">

                                            {{-- <button type="button" name="add-to-cart" value="1269" class="btn btn-black btn-medium text-uppercase mt-3 add-to-cart open-sign-up-popup">Add to cart</button> --}}
                                            <button type="button" name="add-to-cart" class="btn btn-black btn-medium text-uppercase mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Add to cart
                                              </button>
                                        </div>
                                        @include('frontend.popup.sign-up-popup')
                                    @else
                                        <div class="qty-button d-flex flex-wrap pt-3">
                                            <button type="submit" name="add-to-cart" value="1269" class="btn btn-black btn-medium text-uppercase mt-3">Add to cart</button>
                                        </div>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-info-tabs">
    <div class="container">
        <div class="row">
            <div class="tabs-listing">
                <nav>
                    <div class="nav nav-tabs d-flex flex-wrap justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active text-uppercase pe-5" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả sản phẩm </button>
                        <button class="nav-link text-uppercase pe-5" id="nav-information-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false">Thông tin bổ sung</button>
                        {{-- <button class="nav-link text-uppercase pe-5" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button> --}}
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active border-top border-bottom padding-small" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>Product Description</p>
                        <div class="description">{!! html_entity_decode($productDetail->description)!!}</div>
                        <!-- <p>Các thông tin Apple đảm bảo ( Pháp lý)</p>
                        <ul style="list-style-type:disc;" class="list-unstyled ps-4">aaa</ul> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@push('after_scripts')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>


    $(document).ready(function() {
        $('#color-list').on('click', '.color-product', function(e) {
            e.preventDefault();
            var color = $(this).data('color');
            var sku = $(this).data('val');
            var url = window.location.href;

            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    color: color,
                    sku: sku
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Cập nhật slug
                    history.replaceState(null, '', url);
                    console.log(response);
                    // Cập nhật giá trị price và stock
                    var price = response.price;
                    var stock = response.stock;
                    var sku = response.sku;
                    var pic = response.photo;

                    // Hiển thị giá trị mới
                    $('.price-product').text(price + '  ₫');
                    $('.stock-product').text(stock);
                    $('.sku-product').val(sku);
                    $('.photo-attr').attr('data-pic', pic);
                    var imageUrl = $('.product-color span').attr("data-pic");
                     $(".img-fluid").attr("src", imageUrl);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>




    <script>
        // hành động active màu đầu tiên mỗi khi load lại trang hay vào trang + hành động thay đổi ảnh khi click vào color tương ứng

    $(document).ready(function() {
    // Lấy URL ảnh của màu đầu tiên và đặt nó vào thuộc tính src của ảnh
        var firstColorImageUrl = $(".product-color span:first-child").attr("data-pic");
        $(".img-fluid").attr("src", firstColorImageUrl);

    // Xử lý sự kiện click cho các phần tử span
     $(".product-color span").click(function() {
         $(".product-color span").removeClass("active");
         $(this).addClass("active");
         var imageUrl = $(this).attr("data-pic");
         $(".img-fluid").attr("src", imageUrl);
        });
    });

    $(window).on("load", function() {
     // Lấy URL ảnh của màu đầu tiên và đặt nó vào thuộc tính src của ảnh
     var firstColorImageUrl = $(".product-color span:first-child").attr("data-pic");
         $(".img-fluid").attr("src", firstColorImageUrl);
     });

    </script>




@endpush
{{-- thiếu dòng @endsection cho section maincontent sẽ bị mất head --}}
@endsection
