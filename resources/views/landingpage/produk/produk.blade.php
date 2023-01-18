<!--=========================================================
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.3
    Copyright 2022-2023
    Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
<!DOCTYPE html>
<html lang="en">

<link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
<link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
<meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

<!-- css Icon Font -->
<link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />

<!-- css All Plugins Files -->
<link rel="stylesheet" href="assets/css/plugins/animate.css" />
<link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
<link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
<link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
<link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
<link rel="stylesheet" href="assets/css/plugins/nouislider.css" />
<link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />

<!-- Main Style -->
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/responsive.css" />

<!-- Background css -->
<link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
@include('layouts.Head')

<body>
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
                    <button class="ec-close">x</button>
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
                            <a href="javascript:void(0)" class="remove">x</a>
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
                            <a href="javascript:void(0)" class="remove">x</a>
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
                            <a href="javascript:void(0)" class="remove">x</a>
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

    <!-- START Product Default Style -->
    <section class="sec-ds el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">All Produk</h2>
                        <h2 class="ec-title">All Produk</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $data)
                    @php
                        $getfoto = explode(',', $data->galeri_produk);
                        $fotoproduk = $getfoto[0];
                    @endphp
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <!-- START single card -->
                        <div class="ec-product-ds">
                            <div class="ec-product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('fotoproduk/' . $fotoproduk) }}"
                                        alt="">
                                </a>
                                <span class="ec-product-discount-label">{{ $data->diskon }}%</span>
                                <ul class="links">
                                    <li><a href="#" data-tip="Add to Wishlist"><img
                                                src="assets/images/icons/wishlist.svg"
                                                class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                    <li><a href="/detail/{{ $data->id }}" data-tip="Quick View"><img
                                                src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="quick view" /></a></li>
                                </ul>
                            </div>
                            <div class="ec-product-body">
                                <ul class="ec-rating">
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star"></li>
                                </ul>
                                <h3 class="ec-title"><a href="#">{{ $data->nama_produk }}</a></h3>
                                <div class="ec-price"><span>Rp.{{ $data->harga_asliproduk }}</span>Rp.
                                    {{ $data->harga_diskonproduk }}</div>
                                <a href="#" class="ec-add-to-cart quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal" id="{{ $data->id }}"
                                    onclick="productView(this.id)" data-bs-target="#ec_quickview_modal">add to
                                    cart</a>
                                {{-- <a class=" ec-add-to-cart" href="#">add to cart</a> --}}
                            </div>
                        </div>
                        <!--/END single card -->
                    </div>
                @endforeach

            </div>
            <br />

        </div>
    </section>
    <!--/END Product Default Style -->


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
                                    <img class="img-responsive" src="-" alt="" id="gambar">
                                </div>
                                {{-- <div class="qty-slide"><img class="img-responsive" src="http://127.0.0.1:8000/fotoproduk/ftku.jpg" alt=""></div>
                                <div class="qty-slide"><img class="img-responsive" src="http://127.0.0.1:8000/fotoproduk/ftku.jpg" alt=""></div> --}}
                            </div>
                            <div class="qty-nav-thumb" id="gambar2" >
                                {{-- <div class="qty-slide" >
                                    <img class="img-responsive" src="-" alt="" id="gambar2">
                                </div> --}}


                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="_" id="namaproduk">k</a>
                                </h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc" id="deskripsipendek">l</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price" id="hargaasli">$</span>
                                    <span class="new-price" id="hargadiskon">$</span>
                                </div>
                                <form action="/postcart" method="post">
                                    @csrf
                                    <div class="ec-pro-variation">
                                        <div class="ec-pro-variation-inner ec-pro-variation-color">
                                            <span>Color</span>
                                            <div class="ec-pro-color">

                                                <select class="form-select" aria-label="Default select example"
                                                    id="warna" name="warna">


                                                </select>
                                            </div>
                                        </div>
                                        <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                            <span>Size</span>
                                            <div class="ec-pro-variation-content" id="sizeArea">
                                                <select class="form-select" aria-label="Default select example"
                                                    id="ukuran" name="ukuran">


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-quickview-qty">
                                        <div class="qty-plus-minus">
                                            <input class="qty-input" type="text" name="jumlah" value="1" />
                                            <input class="qty-input" type="hidden" name="id" value="" id="ids" />
                                        </div>
                                        <div class="ec-quickview-cart ">
                                            <button class="btn btn-primary"><img src="{{asset('assets/images/icons/cart.svg')}}"
                                                    class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Newsletter Modal Start -->

    <!-- Newsletter Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="icon" /><span
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
                    alt="cart" />
            </div>
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
                                    <img src="{{asset('assets/images/whatsapp/profile_01.jpg')}}" class="ec-user-img"
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
                                    <img src="{{asset('assets/images/whatsapp/profile_02.jpg')}}" class="ec-user-img"
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
                                    <img src="{{asset('assets/images/whatsapp/profile_03.jpg')}}" class="ec-user-img"
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
                                    <img src="{{asset('assets/images/whatsapp/profile_04.jpg')}}" class="ec-user-img"
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
                    <img class="whatsapp" src="{{asset('assets/images/common/whatsapp.png')}}" alt="whatsapp icon">
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
            <img alt="icon" src="assets/images/common/settings.png">
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


    <!-- Script -->





    <script>
        function productView(id) {
            // alert(id)
            $.ajax({
                type: 'GET',
                url: '/detailmodal/' + id,
                dataType: 'json',
                success: function(data) {

                    // console.log(data.data.galeri_produk)
                    // console.log(data.data.deskirpsi_pendek)
                    $('#ids').val(data.data.id);
                    $('#namaproduk').text(data.data.nama_produk);
                    $('#deskripsipendek').text(data.data.deskirpsi_pendek);
                    $('#hargaasli').text(data.data.harga_asliproduk);
                    $('#hargadiskon').text(data.data.harga_diskonproduk);
                    $('#namaproduk').attr('href','/detail/' + data.data.id );
                    //  $('#pbrand').text(data.product.brand.brand_name);
                    //  $('#pweight').text(data.product.product_weight);

                    $.each(data.galeri, function(key, value) {
                        // console.log(value);
                        // var html = '';
                        // html += '<div class="qty-slide"><img class="img-responsive" src="http://127.0.0.1:8000/fotoproduk/' + value +'" alt=""></div>';
                        //  $('#gambar').html(html)
                        //  $('#gambar2').html(html)
                        // $('#gambar').append(' <img  src="http://127.0.0.1:8000/fotoproduk/' + value +'" >')
                        // $('#gambar2').append(' <img class="img-responsive" src="http://127.0.0.1:8000/fotoproduk/' + value +'" >')

                        $('#gambar').attr('src', 'http://127.0.0.1:8000/fotoproduk/' + value);
                        // $('#gambar2').attr('src', 'http://127.0.0.1:8000/fotoproduk/' + value);
                    })

                    // Color
                    $('select[name="warna"]').empty();
                    $.each(data.warna, function(key, value) {


                        $('select[name="warna"]').append('<option value=" ' + value + ' ">' +
                            value + ' </option>')
                    }) // end color

                    // // Size
                    $('select[name="ukuran"]').empty();
                    $.each(data.ukuran, function(key, value) {
                        $('select[name="ukuran"]').append('<option value=" ' + value + ' ">' + value +
                            ' </option>')

                    }) // end size
                }

            })


        }
    </script>

     @include('layouts.script')

    <!-- End Script
 </body>
 </html>
