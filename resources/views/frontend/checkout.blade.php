@extends('layouts.app')

@section('title')
Checkout
@endsection

@section('content')
<link rel="stylesheet" href="css/checkout.css">
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>


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

<br><br>
<br><br>


<br>

<div class="row">
    <div class="col-75">
      <div class="container cc">
        <form method="POST" action="{{ url('checkout/'.Auth::user()->id)}}">
            @csrf
            @method('PUT')

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i>First Name</label>
              <input type="text" id="fname" name="fname" value="{{ Auth::user()->fname }}">
              <label for="fname"><i class="fa fa-user"></i> Last Name</label>
              <input type="text" id="lname" name="lname" value="{{ Auth::user()->lname }}">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" value="{{ Auth::user()->address }}">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" value="{{ Auth::user()->city }}">

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="states" value="{{ Auth::user()->states }}">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" value="{{ Auth::user()->zip }}">
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              @error('cname')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

              <input type="text" id="cname" class="@error('cname') is-invalid @enderror" name="cname" value="">


              <label for="ccnum">Credit card number</label>
              @error('cnumber')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <input type="text" id="ccnum" class="@error('cnumber') is-invalid @enderror" name="cnumber" value="">



              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Month</label>
                  @error('mm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                  <input type="text" id="expmonth" class="@error('mm') is-invalid @enderror" name="mm" value="">


                </div>
                <div class="col-50">
                  <label for="cvv">Exp Year</label>
                  @error('yy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  <input type="text" id="expyear" class="@error('yy') is-invalid @enderror" name="yy" value="">

                </div>
              </div>
              <label for="expmonth">CVV</label>
              @error('cvv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              <input type="text" id="cvv" class="@error('cvv') is-invalid @enderror" name="cvv" value="">




            </div>

          </div>

          <input type="submit" value="Continue to checkout" class="bb">
        </form>
      </div>
    </div>


  </div>
<script type='text/javascript'></script>

<br>
<br>
@endsection

@section('scripts')



@endsection
