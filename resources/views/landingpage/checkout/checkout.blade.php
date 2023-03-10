<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="checkout_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    @include('layouts.header')
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
                                src="assets/images/product-image/6_1.jpg" alt="product"></a>
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
                                src="assets/images/product-image/12_1.jpg" alt="product"></a>
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
                                src="assets/images/product-image/3_1.jpg" alt="product"></a>
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
                            <h2 class="ec-breadcrumb-title">Checkout</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec checkout page -->
    <section class="ec-page-content section-space-p">
        <form action="/payment" method="get">
            <div class="container">
                <div class="row">
                    <div class="ec-checkout-leftside col-lg-12 col-md-12 ">
                        <!-- checkout content Start -->
                        <div class="ec-checkout-content">
                            <div class="ec-checkout-inner">
                                <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                    <div class="ec-checkout-block ec-check-bill">
                                        <h3 class="ec-checkout-title">Billing Details</h3>
                                        <div class="ec-bl-block-content">
                                            <div class="ec-check-subtitle">Checkout Options</div>
                                            <div>
                                                <span class="ec-bill-option">
                                                    <span>
                                                        @if ($province_user != null && $Distric_user != null && $SubDistric_user != null)
                                                            <input type="radio" id="bill1" name="radio-group"
                                                                value="true">
                                                            <label for="bill1">I want to use an existing
                                                                address</label>
                                                        @else
                                                            <input type="radio" id="bill3" name="radio-group">
                                                            <label for="bill3">I want to use an existing
                                                                address</label>
                                                        @endif
                                                    </span>
                                                    <span>
                                                        <input type="radio" id="bill2" name="radio-group"
                                                            checked="checked">
                                                        <label for="bill2">I want to use new address</label>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="ec-check-bill-form">
                                                @if ($province_user != null && $Distric_user != null && $SubDistric_user != null)
                                                    <div class="row mb-10" id="existingaddress">
                                                        <div class="col-12">
                                                            <label class="d-flex align-items-center"
                                                                style="font-size: 15px;"><i
                                                                    class="fa-solid fa-location-dot mr-2"
                                                                    style="font-size:22px;"></i> Shipping
                                                                Address</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="ml-8">{{ Auth::user()->name }}</label><br>
                                                            <span class="ml-8">{{ Auth::user()->alamat }},</span><br>
                                                            <span class="ml-8">{{ $SubDistric_user->kecamatan }},
                                                                {{ $Distric_user['type'] }} {{ $Distric_user['city_name'] }},
                                                                {{ $province_user['province'] }}</span>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="row" id="newaddress">
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>First Name*</label>
                                                        <input type="text" name="firstname"
                                                            placeholder="Enter your first name"/>
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Last Name*</label>
                                                        <input type="text" name="lastname"
                                                            placeholder="Enter your last name"/>
                                                    </span>
                                                    <span class="ec-bill-wrap mb-4">
                                                        <label>Address</label>
                                                        <input type="text" name="address"
                                                            placeholder="Enter your full address as in the example below" class="mb-0"/>
                                                        <i>Example : Jl.Kenari No 37, RT 004, RW 036, Desa Arjosari</i>
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Province *</label>
                                                        <span
                                                            class="ec-bl-select-inner d-flex align-items-center border-0">
                                                            <select name="province" id="province"
                                                                class="ec-bill-select">
                                                                <option selected value="">-- Select Province --
                                                                </option>
                                                                @foreach ($provinsi as $prov)
                                                                    <option value="{{ $prov['province_id'] }}">
                                                                        {{ $prov['province'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </span>
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Distric *</label>
                                                        <span
                                                            class="ec-bl-select-inner d-flex align-items-center border-0">
                                                            <select name="distric" id="distric"
                                                                class="ec-bill-select">
                                                                <option selected value="">-- Select Distric --
                                                                </option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>SubDistric *</label>
                                                        <span
                                                            class="ec-bl-select-inner d-flex align-items-center border-0">
                                                            <select name="subdistric" id="subdistric"
                                                                class="ec-bill-select">
                                                                <option selected value="">-- Select SubDistric --
                                                                </option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>District Postal Code *</label>
                                                        <input type="text" name="postalcode"
                                                            placeholder="Enter the district postal code" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--cart content End -->
                    </div>
                    <!-- Sidebar Area Start -->
                    <div class="ec-checkout-rightside col-lg-6 col-md-12" style="margin-bottom: 20px;">
                        <div class="ec-sidebar-wrap overflow-auto" style="height:372px">
                            <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title title">Product</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-pro">
                                        @foreach ($datacart as $produk)
                                            {{-- {{ $produk->attributes->weight }} --}}
                                            <div class="col-sm-12 mb-6">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="product-left-sidebar.html" class="image">
                                                                <img class="main-image"
                                                                    src="{{ asset('fotoproduk/' . $produk->attributes->foto) }}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ec-pro-content">
                                                        <h5 class="ec-pro-title"><a
                                                                href="product-left-sidebar.html">{{ $produk->name }}</a>
                                                        </h5>
                                                        <div class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </div>
                                                        <span class="ec-price">
                                                            <span
                                                                class="new-price">Rp.{{ $produk->attributes->hargatotal }}</span>
                                                        </span>
                                                        <div class="ec-pro-option">
                                                            <div class="ec-pro-size">
                                                                <span class="ec-del-opt-head">Warna :
                                                                    {{ $produk->attributes->warna }}</span>
                                                            </div>
                                                            <div class="ec-pro-size">
                                                                <span class="ec-del-opt-head">Ukuran :
                                                                    {{ $produk->attributes->ukuran }}</span>
                                                            </div>
                                                            <div class="ec-pro-size">
                                                                <span class="ec-del-opt-head">Quantity :
                                                                    {{ $produk->quantity }}</span>
                                                            </div>
                                                            <input type="hidden" id="weight"
                                                                value="{{ $produk->attributes->weight }}"
                                                                name="weight[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                    </div>
                    <div class="ec-checkout-rightside col-lg-6 col-md-12" style="margin-bottom: 20px;">
                        <div class="ec-sidebar-wrap ec-checkout-del-wrap">
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Delivery Method</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-del">
                                        <div class="ec-del-desc">Please select the preferred shipping method to use on
                                            this
                                            order.</div>
                                        <span class="ec-bill-wrap ec-bill-half">
                                            <span class="ec-bl-select-inner">
                                                <select name="ekspedisi" id="delivery"
                                                    class="ec-bill-select">
                                                    <option value="" id="CD">-- Choose Delivery --
                                                    </option>
                                                    <option value="jne">JNE</option>
                                                    <option value="pos">Pos Indonesia</option>
                                                    <option value="tiki">TIKI</option>
                                                </select>
                                            </span>
                                        </span>
                                        <button id="loading" class="btn d-flex align-items-center d-none"
                                            type="button" disabled>
                                            <span class="spinner-border spinner-border-sm mr-2" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <div id="methoddev" class="row">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                            <!-- Sidebar Summary Block -->
                        </div>
                    </div>
                    <div class="ec-checkout-rightside col-lg-12 col-md-12">
                        <div class="ec-sidebar-wrap">
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-pay">
                                        <div>
                                            <span class="ec-pay-commemt">
                                                <span class="ec-pay-opt-head">Add Comments About Your Order</span>
                                                <textarea name="Comment" placeholder="Comments"></textarea>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Summary</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-summary">
                                        <div>
                                            <span class="text-left">Sub-Total</span>
                                            <span class="text-right" id="subtotal"
                                                data-subtotal="{{ $subtotal }}">Rp.{{ $subtotal }}</span>
                                            <input type="hidden" name="harga_produk" value="{{ $subtotal }}">
                                        </div>
                                        <div>
                                            <span class="text-left">Delivery Charges</span>
                                            <span class="text-right" id="DeliveryCharges">Rp.0</span>
                                        </div>
                                        <div class="ec-checkout-summary-total">
                                            <span class="text-left">Total Amount</span>
                                            <span class="text-right" id="total">Rp.{{ $subtotal }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                        <span class="ec-check-order-btn">
                            <input type="hidden" name="subtotal" id="hargatotal" value="">
                            <span style="float: right">
                                <button type="submit" class="btn btn-primary" href="#">Pay Now</button>
                            </span>
                        </span>
                    </div>
        </form>
    </section>
    <!-- New Product Start -->
    <!-- New Product end -->

    <!-- Footer Start -->
    <footer class="ec-footer section-space-mt">
        <div class="footer-container">
            <div class="footer-offer">
                <div class="container">
                    <div class="row">
                        <div class="text-center footer-off-msg">
                            <span>Win a contest! Get this limited-editon</span><a href="#" target="_blank">View
                                Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img
                                            src="assets/images/logo/footer-logo.png" alt=""><img
                                            class="dark-footer-logo" src="assets/images/logo/dark-logo.png"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <h4 class="ec-footer-heading">Contact us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.</li>
                                        <li class="ec-footer-link"><span>Call Us:</span><a
                                                href="tel:+440123456789">+44
                                                0123 456 789</a></li>
                                        <li class="ec-footer-link"><span>Email:</span><a
                                                href="mailto:example@ec-email.com">+example@ec-email.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Information</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                        <li class="ec-footer-link"><a href="faq.html">FAQ</a></li>
                                        <li class="ec-footer-link"><a href="#">Delivery Information</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Account</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">My Account</a></li>
                                        <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                        <li class="ec-footer-link"><a href="#">Wish List</a></li>
                                        <li class="ec-footer-link"><a href="#">Specials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Services</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Discount Returns</a></li>
                                        <li class="ec-footer-link"><a href="#">Policy & policy </a></li>
                                        <li class="ec-footer-link"><a href="#">Customer Service</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-news">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Newsletter</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">Get instant updates about our new products and
                                            special promos!</li>
                                    </ul>
                                    <div class="ec-subscribe-form">
                                        <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                            action="#">
                                            <div id="ec_news_signup" class="ec-form">
                                                <input class="ec-email" type="email" required=""
                                                    placeholder="Enter your email here..." name="ec-email"
                                                    value="" />
                                                <button id="ec-news-btn" class="button btn-primary" type="submit"
                                                    name="subscribe" value=""><i
                                                        class="ecicon eci-paper-plane-o"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer social Start -->
                        <div class="col text-left footer-bottom-left">
                            <div class="footer-bottom-social">
                                <span class="social-text text-upper">Follow us on:</span>
                                <ul class="mb-0">
                                    <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                                class="ecicon eci-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                                class="ecicon eci-twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                                class="ecicon eci-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                                class="ecicon eci-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer social End -->
                        <!-- Footer Copyright Start -->
                        <div class="col text-center footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © 2021-2022 <a class="site-name text-upper"
                                        href="#">ekka<span>.</span></a>. All Rights Reserved</div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <div class="col footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">
                                <div class="payment-link">
                                    <img src="assets/images/icons/payment.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse
                                        for women</a>
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
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a>
                                                </li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a>
                                                </li>
                                                <li><a href="#" class="ec-opt-sz"
                                                        data-tooltip="Extra Large">XL</a></li>
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
            <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg"
                    alt="" /></div>
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

    <!-- Vendor JS -->
    @include('layouts.script')
    <script>
        //show and hide address
        $(document).ready(function() {
            $("#existingaddress").addClass('d-none');
            $("#bill3").click(function(e) {
                e.preventDefault();
                alert("Untuk menggunakan fitur ini lengkapi dulu alamat di profile")
                $("#methoddev").empty();
            });
            $("#bill1,#bill2").change(function(e) {
                e.preventDefault();
                if ($("#bill1").is(':checked')) {
                    $("#existingaddress").removeClass('d-none');
                    $("#newaddress").addClass('d-none');
                } else {
                    $("#existingaddress").addClass('d-none');
                    $("#newaddress").removeClass('d-none');
                }
                // $("#methoddev").empty();
                $("#delivery option[value='']").removeAttr("selected", "selected");
                $("#delivery option[value='']").attr("selected", "selected");
                $("#methoddev").empty();
            });
        });
        $(document).ready(function() {
            $('#province').change(function() {
                var rsi = $(this).val();
                var ci = null;
                // alert(ci);
                $.ajax({
                    url: '/getkabupaten',
                    type: 'post',
                    data: 'rsi=' + rsi + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        $('#distric').html(result);
                        // $('#distric').removeAttr('disabled');
                    }
                });
                //validasi
                var subtotal = $("#subtotal").attr("data-subtotal");
                $("#methoddev").empty();
                $('#subdistric').html('<option value="">-- Select SubDistric --</option>');
                $("#delivery option[value='']").removeAttr("selected", "selected");
                $("#delivery option[value='']").attr("selected", "selected");
                $("#DeliveryCharges").text("Rp.0");
                $("#total").text("Rp." + subtotal);
            });
        });
        $(document).ready(function() {
            $('#distric').change(function() {
                // alert("p");
                var ci = $(this).val();
                // console.log(ci);
                $.ajax({
                    url: '/getkecamatan',
                    type: 'post',
                    data: 'ci=' + ci + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        $('#subdistric').html(result);
                        // $('#distric').removeAttr('disabled');
                    }
                });
                //validasi
                var subtotal = $("#subtotal").attr("data-subtotal");
                $("#methoddev").empty();
                // $('#subdistric').html('<option value="">-- Select SubDistric --</option>');
                $("#delivery option[value='']").removeAttr("selected", "selected");
                $("#delivery option[value='']").attr("selected", "selected");
                $("#DeliveryCharges").text("Rp.0");
                $("#total").text("Rp." + subtotal);
            });
        });
        $(document).ready(function() {
            $("#subdistric").change(function(e) {
                e.preventDefault();
                //validasi
                var subtotal = $("#subtotal").attr("data-subtotal");
                $("#methoddev").empty();
                $("#delivery option[value='']").removeAttr("selected", "selected");
                $("#delivery option[value='']").attr("selected", "selected");
                $("#DeliveryCharges").text("Rp.0");
                $("#total").text("Rp." + subtotal);
            });
        });
        $(document).ready(function() {
            $("#delivery").change(function(e) {
                e.preventDefault();
                var prov = $("#province").val();
                var dis = $("#distric").val();
                var wgt = [];
                $("input[name^='weight']").each(function() {
                    wgt.push($(this).val());
                });
                var dev = $(this).val();
                console.log(null);
                var ExistingAddress = "";
                if ($("#bill1").is(":checked")) {
                    var ExistingAddress = $("#bill1").val();
                } else {
                    var ExistingAddress = null;
                }
                $.ajax({
                    type: "get",
                    url: "/getongkir",
                    data: {
                        ea: ExistingAddress,
                        prov: prov,
                        dis: dis,
                        dev: dev,
                        wgt: wgt
                    },
                    // dataType: "dataType",
                    beforeSend: function() {
                        $('#loading').removeClass('d-none');
                        $('#methoddev').html('');
                    },
                    success: function(data) {
                        $('#methoddev').html(data);
                        $(document).ready(function() {
                            $(".ongkir").change(function(e) {
                                e.preventDefault();
                                let val = $(this).val();
                                let subtotal = $("#subtotal").attr(
                                    "data-subtotal");
                                $("#DeliveryCharges").text("Rp." + val);
                                let total = parseInt(subtotal) + parseInt(val);
                                $("#hargatotal").val(total);
                                $("#total").text("Rp." + total);
                            });
                        });
                    },
                    error: function() {
                        alert("Tolong Lengkapi Alamat Untuk Menilih Delivery");
                    },
                    complete: function() {
                        $('#loading').addClass('d-none');
                    },
                });
            });
        });
    </script>
    <script>
        $(".ec-bill-select:eq(0),.ec-bill-select:eq(1),.ec-bill-select:eq(2)").select2({
            theme: 'bootstrap-5'
        });
    </script>
</body>

</html>
