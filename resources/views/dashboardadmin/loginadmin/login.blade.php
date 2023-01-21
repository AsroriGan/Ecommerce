<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kanakku - Bootstrap Admin HTML Template</title>

    <link rel="shortcut icon" href="{{ asset('template/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('template/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <img class="img-fluid logo-dark mb-2" src="{{ asset('template/assets/img/logo.png') }}" alt="Logo">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form action="/loginadminproses" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                                        placeholder="Enter your email" value="{{old('email')}}" autofocus>
                                   @error('email')
                                        <div class="invalid-feedback">Harap Isi Email Dengan Benar</div>
                                    @enderror
                                </div>
                                 
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input name="password" id="myInput" type="password" class="form-control pass-input @error('password') is-invalid @enderror "
                                            placeholder="Enter your password correctly" autofocus>
                                         
                                        @error('password')
                                        <div class="invalid-feedback">Harap Isi Password</div>
                                        @enderror
                                     <span class="fas fa-eye toggle-password" onclick="myFunction()"></span>   
                                    </div>
                                    
                                   
                                    @if (Session::has('password'))
                                        <div>
                                            <span class="text-danger" style="font-size: 12px;">Password salah</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cb1">
                                                <label class="custom-control-label" for="cb1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
                                {{-- <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>

                                <div class="social-login mb-3">
                                    <span>Login with</span>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a
                                        href="#" class="google"><i class="fab fa-google"></i></a>
                                </div>

                                <div class="text-center dont-have">Don't have an account yet? <a
                                        href="register.html">Register</a></div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <script>
        function loginadminproses() {
            var email = $("#email").val();
            var password = $("#password").val();
            $.ajax({
                type: "post",
                url: {{ url('loginadminproses') }},
                data: "email=" + email + "&password=" + password,
                success: function(data) {
                    $(".btn-close").click();
                    toastr.success("Berhasil Masuk", "Success")
                    tampilkandata()
                },
                error: function(error) {
                    console.log(error.responseJSON);
                    let error_log = error.responseJSON.errors;
                    if (error.status == 422) {
                        $('#email').addClass('is-invalid');
                        $('#password').addClass('is-invalid');
                    }
                }
            });
        }
    </script> --}}

    <script>
            function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
