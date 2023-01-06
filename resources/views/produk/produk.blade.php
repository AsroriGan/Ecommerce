
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
                        <h2 class="ec-bg-title">Style 1</h2>
                        <h2 class="ec-title">Style 1</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-ds">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/18_1.jpg" alt="" />
                            </a>
                            <span class="ec-product-discount-label">-33%</span>
                            <ul class="links">
                                <li><a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a></li>
                                <li><a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a></li>
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
                            <h3 class="ec-title"><a href="#">Boaty air pods s8</a></h3>
                            <div class="ec-price"><span>$90.00</span> $66.00</div>
                            <a class=" ec-add-to-cart" href="#">add to cart</a>
                        </div>
                    </div>
                    <!--/END single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-ds">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/6_1.jpg" alt="" />
                            </a>
                            <ul class="links">
                                <li><a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a></li>
                                <li><a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a></li>
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
                            <h3 class="ec-title"><a href="#">Long slive t-shirt</a></h3>
                            <div class="ec-price">$79.90</div>
                            <a class=" ec-add-to-cart" href="#">add to cart</a>
                        </div>
                    </div>
                    <!--/END single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-ds">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/3_1.jpg" alt="" />
                            </a>
                            <ul class="links">
                                <li><a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a></li>
                                <li><a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a></li>
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
                            <h3 class="ec-title"><a href="#">Leather purse for women</a></h3>
                            <div class="ec-price">$56.90</div>
                            <a class=" ec-add-to-cart" href="#">add to cart</a>
                        </div>
                    </div>
                    <!--/END single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-ds">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/4_1.jpg" alt="" />
                            </a>
                            <ul class="links">
                                <li><a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a></li>
                                <li><a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a></li>
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
                            <h3 class="ec-title"><a href="#">Hool hat for men</a></h3>
                            <div class="ec-price">$79.90</div>
                            <a class=" ec-add-to-cart" href="#">add to cart</a>
                        </div>
                    </div>
                    <!--/END single card -->
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Default Style -->

    <!-- START Product Default Style -->
    <section class="sec-csc el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 2</h2>
                        <h2 class="ec-title">Style 2</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-csc">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/9_4.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Clothes</a></h3>
                            <p class="ec-description">
                                Drew House Hoodie for Men/Women
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$56.00</span> $39.00</div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 ec-link-icon">
                                    <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                    <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a>
                                    <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 ec-link-btn">
                                    <a class=" ec-add-to-cart" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/END single card -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-csc">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/8_4.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Electronics</a></h3>
                            <p class="ec-description">
                                I Smart watch 32GB core.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$599.00</span> $444.00</div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 ec-link-icon">
                                    <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                    <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a>
                                    <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 ec-link-btn">
                                    <a class=" ec-add-to-cart" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/END single card -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-csc">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/11_4.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Accessories</a></h3>
                            <p class="ec-description">
                                Nile leather purse for womens.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$90.00</span> $66.00</div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 ec-link-icon">
                                    <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                    <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a>
                                    <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 ec-link-btn">
                                    <a class=" ec-add-to-cart" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/END single card -->
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Default Style -->

    <!-- START Product Full Width Style -->
    <section class="sec-fw el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 3</h2>
                        <h2 class="ec-title">Style 3</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-fw">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/1_1.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                            <div class="ec-link-icon">
                                <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                                <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                        class="svg_img pro_svg" alt="quick view" /></a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Baby toy teddybear</a></h3>
                            <p class="ec-description">
                                Lorem Ipsum is simply dummy text.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$90.00</span> $66.00</div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-fw">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/2_2.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                            <div class="ec-link-icon">
                                <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                                <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                        class="svg_img pro_svg" alt="quick view" /></a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Gym backpack for men</a></h3>
                            <p class="ec-description">
                                Lorem Ipsum is simply dummy text.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$90.00</span> $66.00</div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-fw">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/3_1.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                            <div class="ec-link-icon">
                                <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                                <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                        class="svg_img pro_svg" alt="quick view" /></a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Leather purse for womens</a></h3>
                            <p class="ec-description">
                                Lorem Ipsum is simply dummy text.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$75.00</span> $46.00</div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-fw">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/4_2.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                            <div class="ec-link-icon">
                                <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                                <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                        class="svg_img pro_svg" alt="quick view" /></a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Hool hat for men</a></h3>
                            <p class="ec-description">
                                Lorem Ipsum is simply dummy text.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$50.00</span> $39.00</div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Default Style -->

    <!-- START Product Transparent Style -->
    <section class="sec-tp el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 4</h2>
                        <h2 class="ec-title">Style 4</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-tp">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/1.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                            <div class="ec-link-icon">
                                <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                                <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                        class="svg_img pro_svg" alt="quick view" /></a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Baby cotton fabric shoes</a></h3>
                            <p class="ec-description">
                                Lorem Ipsum is simply dummy text.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$90.00</span> $66.00</div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>

                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-tp">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/2.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                            <div class="ec-link-icon">
                                <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                                <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                        class="svg_img pro_svg" alt="quick view" /></a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Full sleeve cap hoodies</a></h3>
                            <p class="ec-description">
                                Lorem Ipsum is simply dummy text.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$89.00</span> $39.00</div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-tp">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/3.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                            <div class="ec-link-icon">
                                <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                                <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                        class="svg_img pro_svg" alt="quick view" /></a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Full Sleeve T-Shirt</a></h3>
                            <p class="ec-description">
                                Lorem Ipsum is simply dummy text.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$45.00</span> $27.00</div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-tp">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/6.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                            <div class="ec-link-icon">
                                <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                                <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                        class="svg_img pro_svg" alt="quick view" /></a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Baby toy doctor kit</a></h3>
                            <p class="ec-description">
                                Lorem Ipsum is simply dummy text.
                            </p>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-price"><span>$49.00</span> $34.00</div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Default Style -->

    <!-- START Product Left Side Content Style -->
    <section class="sec-lsc el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 5</h2>
                        <h2 class="ec-title">Style 5</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-lsc">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/7_1.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                        </div>
                        <div class="ec-product-body">
                            <p class="ec-description"> Men's Fashion <span>In stock</span></p>
                            <h3 class="ec-title"><a href="#">Men's plain shirt</a></h3>
                            <div class="ec-el-price">
                                <p class="ec-o-price"> $200 </p>
                                <p class="ec-d-price"> $180 </p>
                            </div>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-size">
                                <a href="#">S</a>
                                <a href="#">M</a>
                                <a href="#">L</a>
                            </div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                                <div class="ec-link-icon">
                                    <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                    <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a>
                                    <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-lsc">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/3_2.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                        </div>
                        <div class="ec-product-body">
                            <p class="ec-description"> Accessories <span>In stock</span></p>
                            <h3 class="ec-title"><a href="#">Leather womens purse</a></h3>
                            <div class="ec-el-price">
                                <p class="ec-o-price"> $345 </p>
                                <p class="ec-d-price"> $265 </p>
                            </div>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-size">
                                <a href="#">S</a>
                                <a href="#">M</a>
                            </div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                                <div class="ec-link-icon">
                                    <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                    <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a>
                                    <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-lsc">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/14_1.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                        </div>
                        <div class="ec-product-body">
                            <p class="ec-description"> Men's Fashion <span>In stock</span></p>
                            <h3 class="ec-title"><a href="#">Men's casual shoes</a></h3>
                            <div class="ec-el-price">
                                <p class="ec-o-price"> $180 </p>
                                <p class="ec-d-price"> $99 </p>
                            </div>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-size">
                                <a href="#">7</a>
                                <a href="#">8</a>
                                <a href="#">9</a>
                            </div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                                <div class="ec-link-icon">
                                    <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                    <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a>
                                    <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- START single card -->
                    <div class="ec-product-lsc">
                        <div class="ec-product-image">
                            <a href="#">
                                <img src="assets/images/product-image/17_1.jpg" class="img-center" alt="">
                            </a>
                            <span class="ec-product-ribbon">New</span>
                        </div>
                        <div class="ec-product-body">
                            <p class="ec-description"> Accessories <span>In stock</span></p>
                            <h3 class="ec-title"><a href="#">Hand bag for womens</a></h3>
                            <div class="ec-el-price">
                                <p class="ec-o-price"> $200 </p>
                                <p class="ec-d-price"> $180 </p>
                            </div>
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <div class="ec-size">
                                <a href="#">S</a>
                                <a href="#">M</a>
                            </div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                                <div class="ec-link-icon">
                                    <a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                    <a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a>
                                    <a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg" alt="quick view" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- START single card -->
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Left Side Content Style -->

    <!-- START Product Swip Down Style -->
    <section class="sec-swd el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 6</h2>
                        <h2 class="ec-title">Style 6</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-swd">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/1_3.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/1_2.jpg" alt="" />
                            </a>
                            <a href="#" class="ec-product-like-icon"><i class="far fa-heart"></i></a>
                            <ul class="ec-product-links ec-link-icon">
                                <li><a href="#"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                            alt="compare" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                            alt="quick view" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/cart.svg"
                                            class="svg_img header_svg pro_svg" alt="cart" /></a></li>
                            </ul>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Baby toy teddybear</a></h3>
                            <div class="ec-price"><span>$78.00</span> $65.00</div>
                            <div class="ec-color">
                                <a href="#"><span class="blue"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-swd">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/3_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/3_1.jpg" alt="" />
                            </a>
                            <a href="#" class="ec-product-like-icon"><i class="far fa-heart"></i></a>
                            <ul class="ec-product-links">
                                <li><a href="#"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                            alt="compare" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                            alt="quick view" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/cart.svg"
                                            class="svg_img header_svg pro_svg" alt="cart" /></a></li>
                            </ul>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Women's leather purse</a></h3>
                            <div class="ec-price"><span>$50.00</span> $48.00</div>
                            <div class="ec-color">
                                <a href="#"><span class="blue"></span></a>
                                <a href="#"><span class="green"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-swd">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/8_1.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/8_4.jpg" alt="" />
                            </a>
                            <a href="#" class="ec-product-like-icon"><i class="far fa-heart"></i></a>
                            <ul class="ec-product-links">
                                <li><a href="#"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                            alt="compare" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                            alt="quick view" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/cart.svg"
                                            class="svg_img header_svg pro_svg" alt="cart" /></a></li>
                            </ul>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Apple smart watch</a></h3>
                            <div class="ec-price"><span>$650.00</span> $632.00</div>
                            <div class="ec-color">
                                <a href="#"><span class="pink"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-swd">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/2_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/3_1.jpg" alt="" />
                            </a>
                            <a href="#" class="ec-product-like-icon"><i class="far fa-heart"></i></a>
                            <ul class="ec-product-links">
                                <li><a href="#"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                            alt="compare" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                            alt="quick view" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/cart.svg"
                                            class="svg_img header_svg pro_svg" alt="cart" /></a></li>
                            </ul>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Gym back pack for men</a></h3>
                            <div class="ec-price"><span>$102.00</span> $66.00</div>
                            <div class="ec-color">
                                <a href="#"><span class="blue"></span></a>
                                <a href="#"><span class="green"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Swip Down Style -->

    <!-- START Product Curve Border Bottom Style -->
    <section class="sec-cbb el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 7</h2>
                        <h2 class="ec-title">Style 7</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-cbb">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/6_1.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/6_2.jpg" alt="" />
                            </a>
                            <ul class="ec-product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a></li>
                                <li><a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg pro_svg" alt="quick view" /></a></li>
                                <li><a href="#" data-tip="Add To Cart"><img src="assets/images/icons/cart.svg"
                                            class="svg_img pro_svg pro_svg" alt="add to cart" /></a></li>
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
                            <h3 class="ec-title"><a href="#">Men's t-shirt plain</a></h3>
                            <div class="ec-price"><span>$46.00</span> $29.00</div>
                            <div class="ec-color">
                                <a href="#"><span class="red"></span></a>
                                <a href="#"><span class="blue"></span></a>
                                <a href="#"><span class="pink"></span></a>
                                <a href="#"><span class="green"></span></a>
                            </div>
                            <div class="ec-size">
                                <a href="#">S</a>
                                <a href="#">M</a>
                                <a href="#">L</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-cbb">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/7_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/7_1.jpg" alt="" />
                            </a>
                            <ul class="ec-product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a></li>
                                <li><a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg pro_svg" alt="quick view" /></a></li>
                                <li><a href="#" data-tip="Add To Cart"><img src="assets/images/icons/cart.svg"
                                            class="svg_img pro_svg pro_svg" alt="add to cart" /></a></li>
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
                            <h3 class="ec-title"><a href="#">Men's plain Shirt</a></h3>
                            <div class="ec-price"><span>$15.00</span> $13.00</div>
                            <div class="ec-color">
                                <a href="#"><span class="red"></span></a>
                                <a href="#"><span class="blue"></span></a>
                                <a href="#"><span class="pink"></span></a>
                                <a href="#"><span class="green"></span></a>
                            </div>
                            <div class="ec-size">
                                <a href="#">S</a>
                                <a href="#">M</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-cbb">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/9_1.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/9_2.jpg" alt="" />
                            </a>
                            <ul class="ec-product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a></li>
                                <li><a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg pro_svg" alt="quick view" /></a></li>
                                <li><a href="#" data-tip="Add To Cart"><img src="assets/images/icons/cart.svg"
                                            class="svg_img pro_svg pro_svg" alt="add to cart" /></a></li>
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
                            <h3 class="ec-title"><a href="#">Long slive hoodies</a></h3>
                            <div class="ec-price"><span>$90.00</span> $66.00</div>
                            <div class="ec-color">
                                <a href="#"><span class="red"></span></a>
                                <a href="#"><span class="blue"></span></a>
                                <a href="#"><span class="pink"></span></a>
                                <a href="#"><span class="green"></span></a>
                            </div>
                            <div class="ec-size">
                                <a href="#">S</a>
                                <a href="#">M</a>
                                <a href="#">L</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-cbb">
                        <div class="ec-product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="assets/images/product-image/15_4.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/15_1.jpg" alt="" />
                            </a>
                            <ul class="ec-product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#" data-tip="Compare"><img src="assets/images/icons/compare.svg"
                                            class="svg_img pro_svg" alt="compare" /></a></li>
                                <li><a href="#" data-tip="Quick View"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg pro_svg" alt="quick view" /></a></li>
                                <li><a href="#" data-tip="Add To Cart"><img src="assets/images/icons/cart.svg"
                                            class="svg_img pro_svg pro_svg" alt="add to cart" /></a></li>
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
                            <h3 class="ec-title"><a href="#">Baby cotton fabric shoes</a></h3>
                            <div class="ec-price"><span>$90.00</span> $66.00</div>
                            <div class="ec-color">
                                <a href="#"><span class="red"></span></a>
                                <a href="#"><span class="blue"></span></a>
                                <a href="#"><span class="pink"></span></a>
                                <a href="#"><span class="green"></span></a>
                            </div>
                            <div class="ec-size">
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Swip Down Style -->

    <!-- START Product Swip Up Style -->
    <section class="sec-sup el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 8</h2>
                        <h2 class="ec-title">Style 8</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sup">
                        <div class="ec-product-image">
                            <a href="#" class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/1_3.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/1_2.jpg" alt="" />
                            </a>
                            <span class="ec-product-sale-label">sale!</span>
                            <ul class="ec-social">
                                <li><a href="#"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                            alt="compare" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg pro_svg" alt="quick view" /></a></li>
                            </ul>
                            <div class="ec-product-rating">
                                <ul class="ec-rating">
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star"></li>
                                </ul>
                                <a class="ec-add-to-cart" href="#"> ADD TO CART </a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Baby toy teddybear</a></h3>
                            <div class="ec-price"><span>$90.00</span> $66.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sup">
                        <div class="ec-product-image">
                            <a href="#" class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/4_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/4_1.jpg" alt="" />
                            </a>
                            <span class="ec-product-sale-label">sale!</span>
                            <ul class="ec-social">
                                <li><a href="#"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                            alt="compare" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/quickview.svg"
                                            class="svg_img pro_svg pro_svg" alt="quick view" /></a></li>
                            </ul>
                            <div class="ec-product-rating">
                                <ul class="ec-rating">
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star"></li>
                                </ul>
                                <a class="ec-add-to-cart" href="#"> ADD TO CART </a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Hool hat for men</a></h3>
                            <div class="ec-price"><span>$85.00</span> $81.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sup">
                        <div class="ec-product-image">
                            <a href="#" class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/12_1.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/12_2.jpg" alt="" />
                            </a>
                            <span class="ec-product-sale-label">sale!</span>
                            <ul class="ec-social">
                                <li><a href="#"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                            alt="compare" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                            alt="quick view" /></a></li>
                            </ul>
                            <div class="ec-product-rating">
                                <ul class="ec-rating">
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star"></li>
                                </ul>
                                <a class="ec-add-to-cart" href="#"> ADD TO CART </a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">womens heels shoes</a></h3>
                            <div class="ec-price"><span>$76.00</span> $66.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sup">
                        <div class="ec-product-image">
                            <a href="#" class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/8_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/8_1.jpg" alt="" />
                            </a>
                            <span class="ec-product-sale-label">sale!</span>
                            <ul class="ec-social">
                                <li><a href="#"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg pro_svg" alt="wishlist" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                            alt="compare" /></a></li>
                                <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                            alt="quick view" /></a></li>
                            </ul>
                            <div class="ec-product-rating">
                                <ul class="ec-rating">
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star"></li>
                                </ul>
                                <a class="ec-add-to-cart" href="#"> ADD TO CART </a>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <h3 class="ec-title"><a href="#">Apple smart watch</a></h3>
                            <div class="ec-price"><span>$482.00</span> $365.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Swip Up Style -->

    <!-- START Product Swip Button Style -->
    <section class="sec-sdwn el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 9</h2>
                        <h2 class="ec-title">Style 9</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sdwn">
                        <div class="ec-product-image">
                            <div class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/3_1.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/3_2.jpg" alt="" />
                                <ul class="ec-social">
                                    <li><a href="#"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                alt="wishlist" /></a></li>
                                    <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                                alt="compare" /></a></li>
                                    <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="quick view" /></a></li>
                                </ul>
                                <span class="ec-product-sale-label">sale!</span>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <div class="ec-slide">
                                <h3 class="ec-title"><a href="#">Women's leather purse</a></h3>
                                <div class="ec-price"><span>$86.00</span> $65.00</div>
                                <div class="ec-color">
                                    <a href="#"><span class="red"></span></a>
                                    <a href="#"><span class="blue"></span></a>
                                    <a href="#"><span class="pink"></span></a>
                                    <a href="#"><span class="green"></span></a>
                                </div>
                                <div class="ec-size">
                                    <a href="#">S</a>
                                    <a href="#">M</a>
                                </div>
                            </div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sdwn">
                        <div class="ec-product-image">
                            <div class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/5_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/5_1.jpg" alt="" />
                                <ul class="ec-social">
                                    <li><a href="#"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                alt="wishlist" /></a></li>
                                    <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                                alt="compare" /></a></li>
                                    <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="quick view" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <div class="ec-slide">
                                <h3 class="ec-title"><a href="#">Belt for men</a></h3>
                                <div class="ec-price"><span>$15.00</span> $9.00</div>
                                <div class="ec-color">
                                    <a href="#"><span class="red"></span></a>
                                    <a href="#"><span class="blue"></span></a>
                                    <a href="#"><span class="pink"></span></a>
                                    <a href="#"><span class="green"></span></a>
                                </div>
                                <div class="ec-size">
                                    <a href="#">34</a>
                                    <a href="#">36</a>
                                </div>
                            </div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sdwn">
                        <div class="ec-product-image">
                            <div class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/6_1.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/6_2.jpg" alt="" />
                                <ul class="ec-social">
                                    <li><a href="#"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                alt="wishlist" /></a></li>
                                    <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                                alt="compare" /></a></li>
                                    <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="quick view" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <div class="ec-slide">
                                <h3 class="ec-title"><a href="#">Women's plain Top</a></h3>
                                <div class="ec-price"><span>$90.00</span> $66.00</div>
                                <div class="ec-color">
                                    <a href="#"><span class="red"></span></a>
                                    <a href="#"><span class="blue"></span></a>
                                    <a href="#"><span class="pink"></span></a>
                                    <a href="#"><span class="green"></span></a>
                                </div>
                                <div class="ec-size">
                                    <a href="#">S</a>
                                    <a href="#">M</a>
                                    <a href="#">L</a>
                                </div>
                            </div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sdwn">
                        <div class="ec-product-image">
                            <div class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/2_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/3_1.jpg" alt="" />
                                <span class="ec-product-sale-label">sale!</span>
                                <ul class="ec-social">
                                    <li><a href="#"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                alt="wishlist" /></a></li>
                                    <li><a href="#"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                                alt="compare" /></a></li>
                                    <li><a href="#"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="quick view" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ec-product-body">
                            <div class="ec-slide">
                                <h3 class="ec-title"><a href="#">Back pack gym trainer</a></h3>
                                <div class="ec-price"><span>$354.00</span> $265.00</div>
                                <div class="ec-color">
                                    <a href="#"><span class="red"></span></a>
                                    <a href="#"><span class="blue"></span></a>
                                </div>
                                <div class="ec-size">
                                    <a href="#">S</a>
                                    <a href="#">M</a>
                                </div>
                            </div>
                            <div class="ec-link-btn">
                                <a class=" ec-add-to-cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Swip Up Style -->

    <!-- START Product Swip Button Style -->
    <section class="sec-sbtn el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 10</h2>
                        <h2 class="ec-title">Style 10</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sbtn">
                        <div class="ec-product-image">
                            <a href="#" class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/16_1.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/16_2.jpg" alt="" />
                            </a>
                            <span class="ec-product-sale-label">hot</span>
                            <span class="ec-product-discount-label">-33%</span>
                        </div>
                        <div class="ec-product-body">
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <h3 class="ec-title"><a href="#">Bay toy doctor kit</a></h3>
                            <div class="ec-price"><span>$30.00</span> $20.00</div>
                            <div class="ec-product-button-group">
                                <a class="ec-product-like-icon" href="#"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a class="ec-add-to-cart" href="#">ADD TO CART</a>
                                <a class="ec-product-compare-icon" href="#"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sbtn">
                        <div class="ec-product-image">
                            <a href="#" class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/1_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/1_3.jpg" alt="" />
                            </a>
                            <span class="ec-product-sale-label">hot</span>
                            <span class="ec-product-discount-label">-33%</span>
                        </div>
                        <div class="ec-product-body">
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <h3 class="ec-title"><a href="#">Teddy baer baby toy</a></h3>
                            <div class="ec-price"><span>$265.00</span> $156.00</div>
                            <div class="ec-product-button-group">
                                <a class="ec-product-like-icon" href="#"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a class="ec-add-to-cart" href="#">ADD TO CART</a>
                                <a class="ec-product-compare-icon" href="#"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sbtn">
                        <div class="ec-product-image">
                            <a href="#" class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/2_1.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/2_2.jpg" alt="" />
                            </a>
                            <span class="ec-product-sale-label">hot</span>
                            <span class="ec-product-discount-label">-33%</span>
                        </div>
                        <div class="ec-product-body">
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <h3 class="ec-title"><a href="#">Gym trainer back pack</a></h3>
                            <div class="ec-price"><span>$97.00</span> $68.00</div>
                            <div class="ec-product-button-group">
                                <a class="ec-product-like-icon" href="#"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a class="ec-add-to-cart" href="#">ADD TO CART</a>
                                <a class="ec-product-compare-icon" href="#"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ec-product-sbtn">
                        <div class="ec-product-image">
                            <a href="#" class="ec-image">
                                <img class="pic-1" src="assets/images/product-image/3_2.jpg" alt="" />
                                <img class="pic-2" src="assets/images/product-image/3_1.jpg" alt="" />
                            </a>
                            <span class="ec-product-sale-label">hot</span>
                            <span class="ec-product-discount-label">-33%</span>
                        </div>
                        <div class="ec-product-body">
                            <ul class="ec-rating">
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star fill"></li>
                                <li class="ecicon eci-star"></li>
                            </ul>
                            <h3 class="ec-title"><a href="#">Leather hand bag</a></h3>
                            <div class="ec-price"><span>$32.00</span> $25.00</div>
                            <div class="ec-product-button-group">
                                <a class="ec-product-like-icon" href="#"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg pro_svg" alt="wishlist" /></a>
                                <a class="ec-add-to-cart" href="#">ADD TO CART</a>
                                <a class="ec-product-compare-icon" href="#"><img src="assets/images/icons/compare.svg"
                                        class="svg_img pro_svg" alt="compare" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/END Product Swip Up Style --> 
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
                                                 <li><span style="background-color:#ebbf60;"></span></li>
                                                 <li><span style="background-color:#75e3ff;"></span></li>
                                                 <li><span style="background-color:#11f7d8;"></span></li>
                                                 <li><span style="background-color:#acff7c;"></span></li>
                                                 <li><span style="background-color:#e996fa;"></span></li>
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
 
     <!-- Newsletter Modal Start -->
     <div id="ec-popnews-bg"></div>
     <div id="ec-popnews-box">
         <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
         <div class="row">
             <div class="col-md-6 disp-no-767">
                 <img src="assets/images/banner/newsletter.png" alt="newsletter">
             </div>
             <div class="col-md-6">
                 <div id="ec-popnews-box-content">
                     <h2>Subscribe Newsletter</h2>
                     <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                     <form id="ec-popnews-form" action="#" method="post">
                         <input type="email" name="newsemail" placeholder="Email Address" required />
                         <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
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
             <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="cart" />
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
                     <img class="whatsapp" src="assets/images/common/whatsapp.png" alt="whatsapp icon">
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

     @include('layouts.script')

     <!-- End Script
 </body>
 </html>