<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="img/favicon-apple.png">
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png">
 @include('frontend.includeFiles.all-css')
    <title>Mobipath</title>
</head>

<body class="fixed-header sidebar-right-close sidebar-left-close">
    <!-- page loader -->
    <div class="loader justify-content-center pink-gradient">
        <div class="align-self-center text-center">
            <div class="logo-img-loader">
                <img src="{{ asset('frontend') }}/img/loader-hole.png" alt="" class="logo-image">
                <img src="{{ asset('frontend') }}/img/loader-bg.png" alt="" class="logo-bg-image">
            </div>
            <h2 class="mt-3 font-weight-light">Mobipath</h2>
            <p class="mt-2 text-white">Digital School is Here...</p>
        </div>
    </div>
    <!-- page loader ends  -->

    <div class="wrapper h-100  h-sm-auto justify-content-center">
      <!-- main header -->
      <header class="main-header">
          <div class="container-fluid">
              <div class="row align-items-center">
                  <div class="col-auto pl-0">
                      <button class="btn pink-gradient btn-icon" id="left-menu"><i class="material-icons">widgets</i></button>
                      <a href="/" class="logo"><img src="{{ asset('frontend') }}/img/cbane-fklnv-2.jpg" alt=""></a>
                  </div>
              </div>
          </div>
        </div>
      </header>
      <div class="carosel swiper-location-carousel bg-dark background-img position-fixed" style="background: transparent url('{{ asset("frontend") }}/img/bg1.jpg') top left no-repeat">
        <div data-slides-per-view="1" class="swiper-container swiper-init swiper-signin h-25"></div>
        <div class="container h-50  h-sm-auto align-items-center">
          <div class="row align-items-center h-100  h-sm-auto">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto text-center">
              @if (session('status'))
              <div class="alert alert-danger">
                  {{ session('status') }}
              </div>
              @endif
              <h3 class="font-weight-light mb-5 text-white text-center">Welcome back,<br>Please Login to Your Account.</h3>
              <form action="{{ action('Loginsession@login') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card mb-3">
                  <div class="card-body p-0">
                    <label for="inputEmail" class="sr-only">Username</label>
                    <input name="username" type="text" id="inputEmail" class="form-control text-center form-control-lg border-0" placeholder="Username" required="" autofocus="">
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body p-0">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input name="password" type="password" id="inputPassword" class="form-control text-center form-control-lg border-0" placeholder="Password" required="">
                  </div>
                </div>
                <div class="my-4 row">
                  <div class="col-12  text-center">
                    <div class="custom-control custom-checkbox">
                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label text-white" for="customCheck1">Remember Me</label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                    <button class=" btn btn-primary pink-gradient">Sign In</button>
                    <button class="btn btn-outline-primary">Sign Up</button>
                </div><br>
                <div class="text-center mb-4">
                  <a href="" class="text-white">Forgot Password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <!-- content page ends -->
    </div>
    <footer class="border-top">
        <div class="row">
            <div class="col-12 col-sm-6 text-white">All Rights Reserved to ©<b>Mobipath</b> </div>
            <div class="col-12 col-sm-6 text-right text-white"><a href="" class="text-white">Privacy Policy</a> | <a href="" class="text-white">Terms of use</a></div>
        </div>
    </footer>

    @include('frontend.includeFiles.all-js')
    <!-- page specific script -->
    <script>
        'use strict';
        var mySwiper = new Swiper('.swiper-signin', {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });
    </script>
</body>
</html>
