<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/uploads/head-logo/{{ $logos->head_logo_image }}"/>
    <title> @yield('title')</title>

    <base href="{{URL::asset('/')}}" target="_top">

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href=" {{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">








    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <script src={{ asset('js/jquery.min.js') }} type="text/javascript"></script>
    <script src={{ asset('js/cart.js') }} type="text/javascript" ></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

<style>
    body {
        background: #e2eaef;
        font-family: "Open Sans", sans-serif;
    }
    h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin: 30px 0 60px;
    }
    h2::after {
        content: "";
        width: 100px;
        position: absolute;
        margin: 0 auto;
        height: 4px;
        border-radius: 1px;
        background: #000000;
        left: 0;
        right: 0;
        bottom: -20px;
    }

    img {
        width: 450px,
        height: 300px
      }



    </style>





</head>
<body>


 <div id="app">




    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-sm">
        <div class="container">
            <img src="assets/uploads/logo/{{ $logos->logo_image }}" alt="sigma" width="170" height="70" href="{{ url('/') }}">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('cate' )}}">Categories</a>
                  </li>


                </ul>

              </div>

              <!-- Right Side Of Navbar -->
              <form class="form-inline my-2 my-lg-0 pr-5" type="get" action="{{ route('search') }}">
                <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>

              <ul class="navbar-nav ms-auto">

                @if(Auth::check())
                    @if(Auth::user()->role_as!=2)

<a href="{{ url('cart') }}">
                    <button class="btn btn-outline-orange">
                        <i class="fa fa-shopping-cart cart-icon"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill cart-count">0</span>
                    </button>
                </a>
                @endif
                @endif


                  <!-- Authentication Links -->

                  @guest







                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>



                      @endif
                  @else

                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->username }}
                          </a>



                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                            @if(Auth::user()->role_as==2)

                            <a class="dropdown-item" href="{{ url('dashboard') }}" style="color:rgb(0, 0, 0);">

                                {{ __('Dashboard') }}
                            </a>

                                @endif
                                @if(Auth::user()->role_as!=2)
                                <a class="dropdown-item" href="{{ url('my-orders/'.Auth::user()->id) }}" style="color:rgb(0, 0, 0);">

                                    {{ __('My Orders') }}
                                </a>
                                @endif
                                <a class="dropdown-item" href="{{ url('profile/'.Auth::user()->id) }}" style="color:rgb(0, 0, 0);">

                                    {{ __('My Profile') }}
                                </a>

                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>



                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>




                  @endguest

              </ul>


            </div>
        </div>
    </nav>



        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/search.js"></script>
<script src="js/owl.carousel.min.js"></script>




<!-- Footer -->
<footer class="page-footer font-small unique-color-dark" style="background-color: #ffffff;">

  <div style="background-color: #ffffff;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">

          </a>
          <!-- Twitter -->
          <a class="tw-ic">

          </a>
          <!-- Google +-->
          <a class="gplus-ic">

          </a>
          <!--Linkedin -->
          <a class="li-ic">

          </a>
          <!--Instagram-->
          <a class="ins-ic">

          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">SIGMA Market Shop</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>SIGMA market shop is your expert in integration selling products & recruiting recipients</p>

      </div>
      <!-- Grid column -->



      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="/">Home</a>
        </p>
        <p>
          <a href="{{ route('cate' )}}">Categories</a>
        </p>
        @if (Auth::check())


        <p>
          <a href="{{ url('profile/'.Auth::user()->id) }}">Your Account</a>
        </p>
        @endif

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          Ferhat Abbas University, Al Baz, Setif</p>
        <p>
           houssemoodahel@gmail.com</p>

        <p>
            hachemsouiher19@gmail.com</p>
        <p>
           +213 0550702566</p>
        <p>
           +213 0551347599</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="/"> SIGMAMarketShop</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



@yield('scripts')




</body>

</html>
