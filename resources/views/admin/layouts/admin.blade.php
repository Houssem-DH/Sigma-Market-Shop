<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="dist/img/AdminLTELogo.png"/>
  <title>@yield('title')</title>

  <base href="{{URL::asset('/')}}" target="_top">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


  <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin/category.css">

	<link rel="stylesheet" href="css/ss.css">

    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="js/sweetalert/sweet.js"></script>


    <script src="https://kit.fontawesome.com/7468b8642e.js" crossorigin="anonymous"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('cate' )}}" class="nav-link">Categories</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

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
                <a class="dropdown-item" href="{{ url('profile/'.Auth::user()->id) }}">

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



  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sigma Market Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('profile/'.Auth::user()->id) }}" class="d-block">{{ auth::user()->username }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
            </li>

            <li class="nav-item menu-is-opening menu-open mx-1">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-screwdriver-wrench mr-2"></i>
                  <p>
                   Site Management

                <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview" >
                <li class="nav-item">
                <a href="{{ url('/receveur-management') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Receveur Management</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ url('/paginate-options') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Paginate Options</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ url('/images-options') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Images Options</p>
                </a>
                </li>
                </ul>
                </li>








<br>
            <li class="nav-header">TABELS</li>
<hr>
            <li class="nav-item mx-1">
                <a href="{{ url('/members') }}" class="nav-link">
                    <i class="fa-solid fa-user mr-2"></i>
                  <p>
                    Members

                  </p>
                </a>

              </li>

              <li class="nav-item mx-1">
                <a href="{{ url('/category') }}" class="nav-link">
                    <i class="fa-solid fa-tags mr-2"></i>
                  <p>
                    Categories

                  </p>
                </a>
              </li>

              <li class="nav-item mx-1">
                <a href="{{ url('/article') }}" class="nav-link">
                    <i class="fa-solid fa-basket-shopping mr-2"></i>
                  <p>
                    Articles

                  </p>
                </a>

                <li class="nav-header">LES DEMANDES</li>
                <hr>
                <li class="nav-item mx-1">
                    <a href="{{ url('demandes') }}" class="nav-link">
                        <i class="fa-solid fa-user-plus mr-2"></i>
                      <p>
                        Receveur
                      </p>
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a href="{{ url('/orders-demandes') }}" class="nav-link">
                        <i class="fa-solid fa-store mr-2" ></i>
                      <p>
                        Orders
                      </p>
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a href="{{ url('/points-demandes') }}" class="nav-link">
                        <i class="fa-regular fa-credit-card mr-2"></i>
                      <p>
                        Payments
                      </p>
                    </a>
                </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    @yield('content')


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/search.js"></script>




</body>
</html>
