<!DOCTYPE html>
<html lang="en">

<!-- head star -->

@include('layouts.Head')

<!-- head end -->


<body>

    <!-- Header star -->

    @include('layouts.Header')

    <!-- Header end -->


    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Payment</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Payment</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                        <button id="pay-button">Pay!</button>
                        @foreach ($data as $produk)
                            <h5 class="card-title">{{ $produk->name }}</h5>
                            <h5 class="card-title">{{ $produk->quantity }}</h5>
                            <h5 class="card-title">{{ Auth::user()->alamat }}</h5>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->


    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">

                <div class="ec-checkout-rightside col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <div class="ec-sidebar-wrap overflow-auto" style="height:372px">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title title">Product</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-checkout-pro">
                                    @foreach ($data as $produk)
                                        <div class="col-sm-12 mb-6">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('fotoproduk/' . $produk->attributes->foto) }}"
                                                                alt="Product" />
                                                            {{-- <img class="hover-image"
                                                src="assets/images/product-image/1_2.jpg"
                                                alt="Product" /> --}}
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
                                                        {{-- @if (1 == 1)
                                        <span class="old-price"></span>
                                        @endif --}}
                                                        <span
                                                            class="new-price">Rp.{{ $produk->attributes->hargatotal }}</span>
                                                    </span>
                                                    <div class="ec-pro-option">
                                                        <div class="ec-pro-color">
                                                            <span class="ec-pro-opt-label">Color</span>
                                                            <span class="ec-del-opt-head">Warna :
                                                                {{ $produk->attributes->warna }}</span>
                                                        </div>
                                                        <div class="ec-pro-size">
                                                            <span class="ec-pro-opt-label">Size</span>
                                                            {{-- <label for="">Ukuran  : {{$produk->attributes->ukuran}}</label> --}}
                                                            <span class="ec-del-opt-head">Ukuran :
                                                                {{ $produk->attributes->ukuran }}</span>
                                                        </div>
                                                        <input type="hidden" id="weight"
                                                            value="{{ $produk->attributes->weight }}" name="weight[]">
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
            </div>
        </div>
    </section>



    <!-- Footer star -->

    @include('layouts.Footer')

    <!-- Footer end -->

    <!-- Script star -->

    @include('layouts.script')
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_response_to_form(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_response_to_form(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_response_to_form(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>

    <!-- Script end -->


</body>

</html>
