
@extends('layouts.app')

@section('title')
Shopping Cart
@endsection

@section('content')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" href="css/cart/cart.css">

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


<br><br><br><br>



@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif









@if(Auth::user())

<div class="px-4 px-lg-0">
    <!-- For demo purpose -->

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2 py-3">
                    <h5><a href="/" class="text-dark">Home</a> › Cart</h5>
                </div>
            </div>
        </div>

    <!-- End -->

    <div class="pb-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

            <!-- Shopping cart table -->
            <div class="table-responsive ">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Remove</div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @php $subtotal="0" @endphp
                    @php $taxtotal="0" @endphp

                    @foreach ($carts as $item)

                  <tr class="product_data">
                    <input type="hidden" value="{{ $item->articles->id }}" class="prod_id">
                    <th scope="row" class="border-0">
                      <div class="p-2">
                        <img src="assets/uploads/article/{{ $item->articles->image }}" alt="Article Image" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="{{ url('article/'.$item->articles->slug) }}" class="text-dark d-inline-block align-middle">{{ $item->articles->name }}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: {{ $item->articles->category->name }}</span>
                        </div>
                      </div>
                    </th>
                    <input type="hidden" value="{{$item->receveur_id}}" class="receveur_id">
                    <input type="hidden" value="{{$item->articles->percentage}}" class="percentage">
                    <input type="hidden" value="{{ $item->articles->price }}" class="price">

                    <td class="border-0 align-middle"><strong>{{ $item->articles->price }} DZD</strong></td>
                    <td class="border-0 align-middle"><strong>{{ $item->prod_qty }}</strong></td>
                    <input type="hidden" value="{{ $item->prod_qty }}" class="prod_qty">
                    <td class="border-0 align-middle"> <button type="button" class="btn btn-danger delete-cart-item">Delete</button></td>

                  </tr>
                  @php $taxtotal = $taxtotal + $item->prod_qty * $item->articles->tax @endphp
                  @php $subtotal = $subtotal + $item->prod_qty * $item->articles->price @endphp

                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- End -->
          </div>
        </div>





        @php $total = $subtotal + $taxtotal @endphp
        @if ($cartsc==0)
        <div class="cart-shopping-total">
            <div class="row py-5 p-4 bg-white rounded shadow-sm">
            <div class="p-4">

                <ul class="list-unstyled mb-4">

                </ul><a href="{{ url('/') }}" class="btn btn-dark rounded-pill py-2 btn-block">Continue Shoping</a>
              </div>
            </div>


        </div>

        @endif

                @if($cartsc>0)





                        <div class="cart-shopping-total">
                            <div class="row py-5 p-4 bg-white rounded shadow-sm">
                            <div class="p-4">

                                <ul class="list-unstyled mb-4">
                                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>{{ $subtotal }} DZD</strong></li>

                                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>{{ $taxtotal }} DZD</strong></li>
                                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                    <h5 class="font-weight-bold">{{ $total }} DZD</h5>
                                  </li>
                                </ul><a href="{{ url('checkout') }}" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                              </div>
                            </div>


                    </div>












                  </div>
                </div>

              </div>
            </div>
            @endif
            @endif













        @if(!Auth::user())




        Login First



        @endif




        <br><br>
@endsection

@section('scripts')



<script src="js/cart.js"></script>

@endsection
