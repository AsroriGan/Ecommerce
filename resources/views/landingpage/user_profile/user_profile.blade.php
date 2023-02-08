[
<!DOCTYPE html>
<html lang="en">

@include('layouts.Head')
<style>
    .form-control.is-invalid {
        border-color: #050505 !important;
    }
    .was-validated .form-control:valid{
        background-image: none !important;
    }
</style>
<body class="shop_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    @include('layouts.Header')
    <!-- Header End  -->

    <!-- ekka Cart Start -->
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">User Profile</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Profile</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- User profile section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="ec-shop-rightside col-lg-9 col-md-12">
                    <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                        <div class="ec-vendor-card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ec-vendor-block-profile">
                                        <div class="ec-vendor-block-img space-bottom-30">
                                            <div class="ec-vendor-block-bg"
                                                style="background-image:url({{ asset('/assets/images/banner/' . Auth::user()->fotosampul) }}) !important">
                                                <a href="#" class="btn btn-lg btn-primary"
                                                    data-link-action="editmodal" title="Edit Detail"
                                                    data-bs-toggle="modal" data-bs-target="#edit_modal">Edit
                                                    Detail</a>
                                            </div>
                                            <div class="ec-vendor-block-detail">
                                                <img class="v-img"
                                                    src="{{ asset('assets/images/user/' . Auth::user()->foto) }}"
                                                    alt="vendor image">
                                                <h5 class="name">{{ Auth::user()->name }}</h5>
                                                {{-- <p>( Business Man )</p> --}}
                                            </div>
                                            <p>Hello <span>{{ Auth::user()->name }}!</span></p>
                                            <p>From your account you can easily view and track orders. You can manage
                                                and change your account information like address, contact information
                                                and history of orders.</p>
                                        </div>
                                        <h5>Account Information</h5>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div
                                                    class="ec-vendor-detail-block ec-vendor-block-email space-bottom-30">
                                                    <h6>E-mail address <a href="javasript:void(0)"
                                                            data-link-action="editmodal" title="Edit Detail"
                                                            data-bs-toggle="modal" data-bs-target="#edit_modal"><img
                                                                src="assets/images/icons/edit.svg"
                                                                class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Email : </strong>{{ Auth::user()->email }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div
                                                    class="ec-vendor-detail-block ec-vendor-block-contact space-bottom-30">
                                                    <h6>Contact nubmer<a href="javasript:void(0)"
                                                            data-link-action="editmodal" title="Edit Detail"
                                                            data-bs-toggle="modal" data-bs-target="#edit_modal"><img
                                                                src="assets/images/icons/edit.svg"
                                                                class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Phone Nubmer :
                                                            </strong>{{ Auth::user()->notelepon }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-address mar-b-30">
                                                    <h6>Address<a href="javasript:void(0)" data-link-action="editmodal"
                                                            title="Edit Detail" data-bs-toggle="modal"
                                                            data-bs-target="#edit_modal"><img
                                                                src="assets/images/icons/edit.svg"
                                                                class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Home : </strong>
                                                            @if (Auth::user()->provinsi != null)
                                                                {{ $province_user['province'] }},
                                                                {{ $Distric_user['type'] }}
                                                                {{ $Distric_user['city_name'] }},
                                                                {{ $SubDistric_user->kecamatan }},
                                                                67171
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-address">
                                                    <h6>Address details<a href="javasript:void(0)"
                                                            data-link-action="editmodal" title="Edit Detail"
                                                            data-bs-toggle="modal" data-bs-target="#edit_modal"><img
                                                                src="assets/images/icons/edit.svg"
                                                                class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Details : </strong>{{ Auth::user()->alamat }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-vendor-block">
                                <!-- <div class="ec-vendor-block-bg"></div>
                                 <div class="ec-vendor-block-detail">
                                     <img class="v-img" src="assets/images/user/1.jpg" alt="vendor image">
                                     <h5>Mariana Johns</h5>
                                 </div> -->
                                <div class="ec-vendor-block-items">
                                    <ul>
                                        <li><a href="/user-profile">User Profile</a></li>
                                        <li><a href="/change-password">Change Password</a></li>
                                        <li><a href="/history">History</a></li>
                                        <li><a href="/wishlist">Wishlist</a></li>
                                        <li><a href="/cart">Cart</a></li>
                                        <li><a href="/checkout">Checkout</a></li>
                                        <li><a href="/trackorder">Track Order</a></li>
                                        <li><a href="/logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End User profile section -->

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
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="ec-vendor-block-img space-bottom-30">
                            <form action="/edit-profile/{{ Auth::user()->id }}" method="POST"
                                enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf
                                <div class="ec-vendor-block-bg cover-upload">
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' name="fotosampul" id="thumbUpload01"
                                                class="ec-image-upload" accept=".png, .jpg, .jpeg"/>
                                            <label><img src="{{ asset('assets/images/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview v-img"
                                                    src="{{ asset('assets/images/banner/' . Auth::user()->fotosampul) }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-vendor-block-detail">
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input name="foto" type='file' id="thumbUpload02"
                                                class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                            <label><img src="{{ asset('assets/images/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview v-img"
                                                    src="{{ asset('assets/images/user/' . Auth::user()->foto) }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-vendor-upload-detail row g-3">
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">First name</label>
                                        <input type="text" name="fristname" value="{{ $nama[0] }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Last name</label>
                                        <input type="text" name="lastname" value="{{ $nama[1] }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-12 space-t-15">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="alamat" value="{{ Auth::user()->alamat }}"
                                            class="form-control" placeholder="Street Name, Building, No. Home" required>
                                            <div class="invalid-feedback">
                                                Address is required
                                            </div>
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Province *</label>
                                        <select name="provinsi" id="regionstate" class="form-select"
                                            aria-label="Default select example" data-show-subtext="false"
                                            data-live-search="true" required>
                                            @if (Auth::user()->provinsi == null)
                                                <option value="">-- Select Province --</option>
                                                @foreach ($regionstate as $row)
                                                    <option value="{{ $row['province_id'] }}">{{ $row['province'] }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value="{{ $province_user['province_id'] }}" selected>
                                                    {{ $province_user['province'] }}</option>
                                                @foreach ($regionstate as $row)
                                                    <option value="{{ $row['province_id'] }}">{{ $row['province'] }}
                                                    </option>
                                                @endforeach
                                            @endif

                                        </select>
                                        <div class="invalid-feedback">
                                            Please Choose Province
                                        </div>
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Distric *</label>
                                        <select name="kabupaten" id="city" class="form-select"
                                            aria-label="Default select example" required>
                                            @if (Auth::user()->kabupaten == null)
                                                <option value="">-- Select Distric --</option>
                                            @else
                                                <option value="{{ $Distric_user['city_id'] }}" selected>
                                                    {{ $Distric_user['type'] }} {{ $Distric_user['city_name'] }}
                                                </option>
                                            @endif
                                        </select>
                                        <div class="invalid-feedback">
                                            Please Choose Distric
                                        </div>
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">SubDistric *</label>
                                        <select name="kecamatan" id="distric" class="form-select"
                                            aria-label="Default select example" required>
                                            @if (Auth::user()->kecamatan == null)
                                                <option value="">-- Select SubDistric--</option>
                                            @else
                                                <option value="{{ $SubDistric_user['id'] }}" selected>
                                                    {{ $SubDistric_user['kecamatan'] }}</option>
                                            @endif
                                        </select>
                                        <div class="invalid-feedback">
                                            Please Choose SubDistric
                                        </div>
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Post Code *</label>
                                        <input name="kode_pos" type="text" class="form-control"
                                            placeholder="Post Code">
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Email </label>
                                        <input type="text" name="email" value="{{ Auth::user()->email }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Phone </label>
                                        <input type="text" name="notelepon" value="{{ Auth::user()->notelepon }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-12 space-t-15">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="#" class="btn btn-lg btn-secondary qty_close"
                                            data-bs-dismiss="modal" aria-label="Close">Close</a>
                                    </div>
                                </div>
                            </form>
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
        $(document).ready(function() {
            $('#regionstate').change(function() {
                let rsi = $(this).val();
                $.ajax({
                    url: '/getkabupaten',
                    type: 'post',
                    data: 'rsi=' + rsi + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        $('#city').html(result);
                        $('#city').removeAttr('disabled');
                    }
                });
                $.ajax({
                    url: '/getkecamatan',
                    type: 'post',
                    data: 'ci=' + null + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        $('#distric').html(result);
                        $('#distric').removeAttr('disabled');
                    }
                });
            });
        });

        $(document).ready(function() {
            $('#city').change(function() {
                let ci = $(this).val();
                $.ajax({
                    url: '/getkecamatan',
                    type: 'post',
                    data: 'ci=' + ci + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        $('#distric').html(result);
                        $('#distric').removeAttr('disabled');
                    }
                });
            });
        });
    </script>
    <script>
        $(".form-select:eq(0),.form-select:eq(1),.form-select:eq(2)").select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
