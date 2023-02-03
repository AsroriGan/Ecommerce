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
                                @foreach ($data as $dapa)
                                    
                                <li class="ec-breadcrumb-item active">{{ $dapa->name }}</li>
                                @endforeach
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                        <button id="pay-button">Pay!</button>
                        {{-- @foreach ($data as $produk)
                
                        <h5 class="card-title">{{$produk->name}}</h5>
                        @endforeach --}}
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    
           

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
