
<!--=========================================================
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.3
    Copyright 2022-2023
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
 <!DOCTYPE html>
 <html lang="en">

 <head>

    @include('layouts.Head')


</head>
<body class="product_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    @include('layouts.Header')
    <!-- Header End  -->

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{asset('assets/images/product-image/6_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{asset('assets/images/product-image/12_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{asset('assets/images/product-image/3_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Single Products</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Products</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-9 col-md-12">

                    <!-- Single product content Start -->

                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            @foreach ($galeri_produk as $foto)
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="{{ asset('fotoproduk/' . $foto) }}" alt="foto produk"
                                                    >
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="single-nav-thumb">
                                            @foreach ($galeri_produk as $foto)
                                            <div class="single-slide">
                                                <img class="img-responsive" src="{{ asset('fotoproduk/' . $foto) }}" alt="foto produk">
                                            </div>
                                            @endforeach
                                            {{-- <div class="single-slide">
                                                <img class="img-responsive" src="{{asset('assets/images/product-image/9_2.jpg')}}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="{{asset('assets/images/product-image/9_3.jpg')}}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="{{asset('assets/images/product-image/9_4.jpg')}}"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="{{asset('assets/images/product-image/9_3.jpg')}}"
                                                    alt="">
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">{{ $data->nama_produk }}</h5>
                                        <div class="ec-single-rating-wrap">
                                            <div class="ec-single-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star-o"></i>
                                            </div>
                                            <span class="ec-read-review"><a href="#ec-spt-nav-review">Be the first to
                                                    review this product</a></span>
                                        </div>
                                        <div class="ec-single-desc">{{$data->deskirpsi_pendek}}</div>


                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                                <span class="ec-single-ps-title">Harga</span>
                                                <span class="new-price">Rp. {{$data->harga_diskonproduk}}</span>
                                            </div>
                                            <div class="ec-single-stoke">
                                                <span class="ec-single-ps-title">STOCK</span>
                                                <span class="ec-single-sku">{{$data->stok_produk}}</span>
                                            </div>
                                        </div>
                                        <form action="/cartpost/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="ec-pro-variation">
                                                <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                    <span>SIZE</span>
                                                    <div class="ec-pro-variation-content">   
                                                        <select class="form-select" aria-label="Default select example" name="ukuran">       
                                                            <option disabled selected>Open this select menu</option>
                                                             @foreach ($ukuran_produk as $ukuran )
                                                            <option >{{$ukuran}}</option>
                                                            @endforeach
                                                          </select>                                      
                                                      
                                                    </div>
                                                </div>

                                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                                    <span>Color</span>
                                                    <div class="ec-pro-variation-content">
                                                        <select class="form-select" aria-label="Default select example" name="warna">       
                                                            <option disabled selected>Open this select menu</option>
                                                             @foreach ($warna_produk as $warna )
                                                            <option >{{$warna}}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-single-qty">
                                                <div class="qty-plus-minus">
                                                    <input class="qty-input" type="text" name="jumlah" value="1" />
                                                </div>
                                                <div class="ec-single-cart ">
                                                    <button class="btn btn-primary">Add To Cart</button>
                                                </div>
                                                <div class="ec-single-wishlist">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{asset('assets/images/icons/wishlist.svg')}}" class="svg_img fpro_svg"
                                                            alt="" /></a>
                                                </div>
                                                <div class="ec-single-quickview">
                                                    <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#ec_quickview_modal"><img
                                                            src="{{asset('assets/images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                                            alt="" /></a>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="ec-single-social">
                                            <ul class="mb-0">
                                                <li class="list-inline-item facebook"><a href="#"><i
                                                            class="ecicon eci-facebook"></i></a></li>
                                                <li class="list-inline-item twitter"><a href="#"><i
                                                            class="ecicon eci-twitter"></i></a></li>
                                                <li class="list-inline-item instagram"><a href="#"><i
                                                            class="ecicon eci-instagram"></i></a></li>
                                                <li class="list-inline-item youtube-play"><a href="#"><i
                                                            class="ecicon eci-youtube-play"></i></a></li>
                                                <li class="list-inline-item behance"><a href="#"><i
                                                            class="ecicon eci-behance"></i></a></li>
                                                <li class="list-inline-item whatsapp"><a href="#"><i
                                                            class="ecicon eci-whatsapp"></i></a></li>
                                                <li class="list-inline-item plus"><a href="#"><i
                                                            class="ecicon eci-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#ec-spt-nav-details" role="tablist">Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info"
                                            role="tablist">More Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review"
                                            role="tablist">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                        {!!$data->deskirpsi_panjang!!}


                                    </div>
                                </div>
                                <div id="ec-spt-nav-info" class="tab-pane fade">
                                    <div class="ec-single-pro-tab-moreinfo">
                                        <ul>
                                            <li><span>Weight</span> {{$data->berat_produk}} g</li>
                                            <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                            @foreach ($ukuran_produk as $ukuran)

                                            <li><span>Color</span> {{$ukuran}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div id="ec-spt-nav-review" class="tab-pane fade">
                                    <div class="row">
                                        <div class="ec-t-review-wrapper">
                                            <div class="ec-t-review-item">
                                                <div class="ec-t-review-avtar">
                                                    <img src="{{asset('assets/images/review-image/1.jpg')}}" alt="" />
                                                </div>
                                                <div class="ec-t-review-content">
                                                    <div class="ec-t-review-top">
                                                        <div class="ec-t-review-name">Jeny Doe</div>
                                                        <div class="ec-t-review-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ec-t-review-bottom">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a
                                                            type specimen.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-t-review-item">
                                                <div class="ec-t-review-avtar">
                                                    <img src="{{asset('assets/images/review-image/2.jpg')}}" alt="" />
                                                </div>
                                                <div class="ec-t-review-content">
                                                    <div class="ec-t-review-top">
                                                        <div class="ec-t-review-name">Linda Morgus</div>
                                                        <div class="ec-t-review-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star-o"></i>
                                                            <i class="ecicon eci-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ec-t-review-bottom">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a
                                                            type specimen.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ec-ratting-content">
                                            <h3>Add a Review</h3>
                                            <div class="ec-ratting-form">
                                                
                                                    <div class="ec-ratting-star">
                                                        <span>Your rating:</span>
                                                        <div class="ec-t-review-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star-o"></i>
                                                            <i class="ecicon eci-star-o"></i>
                                                            <i class="ecicon eci-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ec-ratting-input">
                                                        <input name="your-name" placeholder="Name" type="text" />
                                                    </div>
                                                    <div class="ec-ratting-input">
                                                        <input name="your-email" placeholder="Email*" type="email"
                                                            required />
                                                    </div>
                                                    <div class="ec-ratting-input form-submit">
                                                        <textarea name="your-commemt"
                                                            placeholder="Enter Your Comment"></textarea>
                                                        <button class="btn btn-primary" type="submit"
                                                            value="Submit">Submit</button>
                                                    </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-pro-leftside ec-common-leftside col-lg-3 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Category</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">clothes</div>
                                        <ul style="display: block;">
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">shoes</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">bag</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">cosmetics</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">electronics</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">phone</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">accessories</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                    <div class="ec-sidebar-slider">
                        <div class="ec-sb-slider-title">Best Sellers</div>
                        <div class="ec-sb-pro-sl">
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{asset('assets/images/product-image/1_1.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Beautiful Teddy Bear</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{asset('assets/images/product-image/2_1.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Gym Backpack</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{asset('assets/images/product-image/3_1.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Beautiful Purse for Women</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{asset('assets/images/product-image/4_1.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wool Felt Long Brim Hat</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{asset('assets/images/product-image/5_1.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Black Leather Belt</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{asset('assets/images/product-image/6_2.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Beautiful Tee for Women</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{asset('assets/images/product-image/7_1.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cotton Shirt for Men</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                            src="{{asset('assets/images/product-image/8_2.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">I Watch for Men</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area Start -->
            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- Related Product Start -->
    <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Related products</h2>
                        <h2 class="ec-title">Related products</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                <!-- Related Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{asset('assets/images/product-image/6_1.jpg')}}" alt="Product" />
                                    <img class="hover-image"
                                        src="{{asset('assets/images/product-image/6_2.jpg')}}" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <a href="#" class="quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal"
                                    data-bs-target="#ec_quickview_modal"><img
                                        src="{{asset('assets/images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                        alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare"
                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="{{asset('assets/images/icons/cart.svg')}}" class="svg_img pro_svg"
                                            alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="{{asset('assets/images/icons/wishlist.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$27.00</span>
                                <span class="new-price">$22.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('assets/images/product-image/6_1.jpg')}}"
                                                data-src-hover="{{asset('assets/images/product-image/6_1.jpg')}}"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#e8c2ff;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('assets/images/product-image/6_2.jpg')}}"
                                                data-src-hover="{{asset('assets/images/product-image/6_2.jpg')}}"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#9cfdd5;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                data-old="$25.00" data-new="$20.00"
                                                data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                data-new="$22.00" data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="assets/images/product-image/7_1.jpg" alt="Product" />
                                    <img class="hover-image"
                                        src="assets/images/product-image/7_2.jpg" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <span class="flags">
                                    <span class="sale">Sale</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal"
                                    data-bs-target="#ec_quickview_modal"><img
                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                        alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare"
                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                            alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="assets/images/icons/wishlist.svg"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$12.00</span>
                                <span class="new-price">$10.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/7_1.jpg"
                                                data-src-hover="assets/images/product-image/7_1.jpg"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#01f1f1;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/7_2.jpg"
                                                data-src-hover="assets/images/product-image/7_2.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#b89df8;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                data-old="$12.00" data-new="$10.00"
                                                data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                data-new="$12.00" data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="assets/images/product-image/1_1.jpg" alt="Product" />
                                    <img class="hover-image"
                                        src="assets/images/product-image/1_2.jpg" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <span class="flags">
                                    <span class="sale">Sale</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal"
                                    data-bs-target="#ec_quickview_modal"><img
                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                        alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare"
                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                            alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="assets/images/icons/wishlist.svg"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$40.00</span>
                                <span class="new-price">$30.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/1_1.jpg"
                                                data-src-hover="assets/images/product-image/1_1.jpg"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#90cdf7;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/1_2.jpg"
                                                data-src-hover="assets/images/product-image/1_2.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#ff3b66;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/1_3.jpg"
                                                data-src-hover="assets/images/product-image/1_3.jpg"
                                                data-tooltip="Green"><span
                                                    style="background-color:#ffc476;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/1_4.jpg"
                                                data-src-hover="assets/images/product-image/1_4.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#1af0ba;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                data-old="$40.00" data-new="$30.00"
                                                data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                data-new="$40.00" data-tooltip="Medium">M</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="assets/images/product-image/2_1.jpg" alt="Product" />
                                    <img class="hover-image"
                                        src="assets/images/product-image/2_2.jpg" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <span class="flags">
                                    <span class="new">New</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal"
                                    data-bs-target="#ec_quickview_modal"><img
                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                        alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare"
                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                            alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="assets/images/icons/wishlist.svg"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$50.00</span>
                                <span class="new-price">$40.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/2_1.jpg"
                                                data-src-hover="assets/images/product-image/2_2.jpg"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#fdbf04;"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product end -->

    <!-- Footer Start -->
    @include('layouts.Footer')
    <!-- Footer Area End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for women</a>
                                </h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$100.00</span>
                                    <span class="new-price">$80.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch">
                                                <li><span style="background-color:#696d62;"></span></li>
                                                <li><span style="background-color:#d73808;"></span></li>
                                                <li><span style="background-color:#577023;"></span></li>
                                                <li><span style="background-color:#2ea1cd;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul class="ec-opt-size">
                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                        data-tooltip="Small">S</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary"><img src="assets/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="assets/images/product-image/1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /></div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_01.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Sahar Darya</span>
                                    <p>Sahar left 7 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_02.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Yolduz Rafi</span>
                                    <p>Yolduz is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_03.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_04.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Khadija Mehr</span>
                                    <p>Khadija left 50 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="assets/images/common/whatsapp.png" alt="whatsapp icon" />
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->

    <!-- Feature tools -->
    <div class="ec-tools-sidebar-overlay"></div>
    <div class="ec-tools-sidebar">
        <div class="tool-title">
            <h3>Features</h3>
        </div>
        <a href="#" class="ec-tools-sidebar-toggle in-out">
            <img alt="icon" src="assets/images/common/settings.png" />
        </a>
        <div class="ec-tools-detail">
            <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                <h3>Color Scheme</h3>
                <ul class="bg-panel">
                    <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                    <li data-color="02"><a href="#" class="colorcode2"></a></li>
                    <li data-color="03"><a href="#" class="colorcode3"></a></li>
                    <li data-color="04"><a href="#" class="colorcode4"></a></li>
                    <li data-color="05"><a href="#" class="colorcode5"></a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Backgrounds</h3>
                <ul class="bg-panel">
                    <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                    <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                    <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                    <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Full Screen mode</h3>
                <div class="ec-fullscreen-mode">
                    <div class="ec-fullscreen-switch">
                        <div class="ec-fullscreen-btn">Mode</div>
                        <div class="ec-fullscreen-on">On</div>
                        <div class="ec-fullscreen-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Dark mode</h3>
                <div class="ec-change-mode">
                    <div class="ec-mode-switch">
                        <div class="ec-mode-btn">Mode</div>
                        <div class="ec-mode-on">On</div>
                        <div class="ec-mode-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>RTL mode</h3>
                <div class="ec-change-rtl">
                    <div class="ec-rtl-switch">
                        <div class="ec-rtl-btn">Rtl</div>
                        <div class="ec-rtl-on">On</div>
                        <div class="ec-rtl-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Language</h3>
                <div class="ec-change-lang">
                    <span id="google_translate_element"></span>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Clear local storage</h3>
                <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
            </div>
        </div>
    </div>
    <!-- Feature tools end -->


    @include('layouts.script')
    <script type="text/javascript">
        @if (Session::has('gagal'))
            swal({
                // position: 'top-end',
                icon: 'warning',
                title: 'Maaf! Stock Barang Ini Sudah Habis',
                showConfirmButton: false,
                timer: 1500
                        });
    </script>                    
                    @endif

</body>
</html>
