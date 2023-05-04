@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')

@if(session('status'))


                        <p class="alert alert-info">
                          {{ session('status') }}
                        </p>
                        @endif
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(img/login.svg);">
              </div>
                    <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4">Login</h3>
                      </div>

                  </div>
                        <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf
                      <div class="form-group mb-3">

                        @if(session('status5'))


                        <p class="alert alert-info">
                          {{ session('status5') }}
                        </p>
                        @endif
                        @if(session('status'))


                        <p class="alert alert-info">
                          {{ session('status') }}
                        </p>
                        @endif
                          <label class="label" for="name">Email Address</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" >
                          @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                   @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror










                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>

                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                  <input type="checkbox" checked>
                                  <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    @if (Route::has('password.request'))
                                <a class="btn btn-link" href="/login#">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                                </div>
                </div>
              </form>
              <p class="text-center">Not a member? <a href="{{ url('/register') }}">Sign Up</a></p>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
@endsection
