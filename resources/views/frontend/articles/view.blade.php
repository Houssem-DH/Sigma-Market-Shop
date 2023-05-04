@extends('layouts.app')

@section('title')
{{ $articles->name }}
@endsection

@section('content')


<link rel="stylesheet" href="css/home/home.css">

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

    .imga {
        width: 500px;
        height: 500px;
      }











      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

      * {
          padding: 0;
          margin: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif
      }

      body {
          background-color: #f4f4f4
      }

      .containeri {
          margin: 40px auto
      }

      #header {
          width: 100%;
          height: 60px;
          box-shadow: 5px 5px 15px #e8e8e8
      }

      .col-lg-4,
      .col-md-6 {
          padding-right: 0
      }

      button.btn.btn-hide {
          height: inherit;
          background-color: #ff935d;
          color: #fff;
          font-size: 0.82rem;
          padding-left: 40px;
          padding-right: 40px;
          border-top-right-radius: 0px;
          border-bottom-right-radius: 0px
      }

      .btn:focus {
          box-shadow: none
      }

      .box-label .btn {
          background-color: #fff;
          padding: 0;
          font-size: 0.8rem
      }

      .btn-red {
          background-color: #e00000ce
      }

      .btn-orange {
          background-color: #ffa500
      }

      .btn-pink {
          background-color: #e0009dce
      }

      .btn-green {
          background-color: #00811c
      }

      .btn-blue {
          background-color: #026bc2
      }

      .btn-brown {
          background-color: #994a00
      }

      .navbar {
          display: inline-flex
      }

      .pagination .page-item .page-link {
          color: #333;
          border: none;
          width: 40px;
          text-align: center
      }

      .pagination .page-item.active .page-link {
          background-color: #fff;
          border: 1px solid #333
      }

      select {
          outline: none;
          padding: 6px 12px;
          margin: 0px 4px;
          color: #999;
          font-size: 0.85rem;
          width: 140px
      }

      #select2 {
          border: 1px solid #777;
          color: #999
      }

      #pro {
          border: none;
          color: #333;
          font-weight: 700;
          padding-left: 0px;
          width: initial
      }

      #filterbar {
          width: 30%;
          background-color: #fff;
          border: 1px solid #ddd;
          border-radius: 15px;
          float: left
      }

      #filterbar input[type="radio"] {
          visibility: hidden
      }

      #filterbar input[type='radio']:checked {
          background-color: #16c79a;
          border: none
      }

      #filterbar .btn.btn-success {
          background-color: #ddd;
          color: #333;
          border: none;
          width: 115px
      }

      #filterbar .btn.btn-success:hover {
          background-color: #aff1e1;
          color: #444
      }

      #filterbar .btn-success:not(:disabled):not(.disabled).active,
      #filterbar .btn-success:not(:disabled):not(.disabled):active {
          background-color: #16c79a;
          color: #fff
      }

      label {
          cursor: pointer
      }

      .tick {
          display: block;
          position: relative;
          padding-left: 23px;
          cursor: pointer;
          font-size: 0.9rem;
          margin: 0
      }

      .tick input {
          position: absolute;
          opacity: 0;
          cursor: pointer;
          height: 0;
          width: 0
      }

      .check {
          position: absolute;
          top: 1px;
          left: 0;
          height: 18px;
          width: 18px;
          background-color: #fff;
          border: 1px solid #ddd;
          border-radius: 3px
      }

      .tick:hover input~.check {
          background-color: #f3f3f3
      }

      .tick input:checked~.check {
          background-color: #ffffff
      }

      .check:after {
          content: "";
          position: absolute;
          display: none
      }

      .tick input:checked~.check:after {
          display: block;
          transform: rotate(45deg) scale(1)
      }

      .tick .check:after {
          left: 6px;
          top: 2px;
          width: 5px;
          height: 10px;
          border: solid rgb(0, 0, 0);
          border-width: 0 3px 3px 0;
          transform: rotate(45deg) scale(2)
      }

      .box {
          padding: 10px
      }

      .box-label {
          color: #11698e;
          font-size: 0.9rem;
          font-weight: 800
      }

      #inner-box,
      #inner-box2 {
          height: 150px;
          overflow-y: scroll
      }

      #inner-box2 {
          height: 132px
      }

      #inner-box::-webkit-scrollbar,
      #inner-box2::-webkit-scrollbar {
          width: 6px
      }

      #inner-box::-webkit-scrollbar-track,
      #inner-box2::-webkit-scrollbar-track {
          background-color: #ddd;
          border-radius: 2px
      }

      #inner-box::-webkit-scrollbar-thumb,
      #inner-box2::-webkit-scrollbar-thumb {
          background-color: #333;
          border-radius: 2px
      }

      #price {
          height: 45px
      }

      #size input[type="checkbox"] {
          visibility: hidden
      }

      #size input[type='checkbox']:checked {
          background-color: #16c79a;
          border: none
      }

      #size .btn.btn-success {
          background-color: #ddd;
          color: #333;
          border: none;
          width: 40px;
          font-size: 0.8rem;
          border-radius: 0
      }

      #size .btn.btn-success:hover {
          background-color: #aff1e1;
          color: #444
      }

      #size .btn-success:not(:disabled):not(.disabled).active,
      #size .btn-success:not(:disabled):not(.disabled):active {
          background-color: #16c79a;
          color: #fff
      }

      #size label {
          margin: 10px;
          margin-left: 0px
      }

      .cardi {
          padding: 10px;
          cursor: pointer;
          transition: .3s all ease-in-out;
          height: 350px
      }

      .cardi:hover {
          box-shadow: 2px 2px 15px #000000e5;
          transform: scale(1.02)
      }

      .cardi .product-name {
          font-weight: 600
      }

      .card-bodyi {
          padding-bottom: 0
      }

      .cardi .text-muted {
          font-size: 0.82rem
      }

      .card-img img {
          padding-top: 10px;
          width: inherit;
          height: 180px;
          object-fit: contain;
          display: block
      }

      .card-bodyi .btn-group .btn {
          padding: 0;
          width: 20px;
          height: 20px;
          margin-right: 5px;
          border-radius: 50%;
          position: relative
      }

      .card-bodyi .btn-group>.btn-group:not(:last-child)>.btn,
      .card-bodyi .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
          border-radius: 50%;
          transition: ease-in all .4s
      }

      .card-bodyi input[type="radio"] {
          visibility: hidden
      }

      .card-bodyi .btn:not(:disabled):not(.disabled).active::after,
      .card-bodyi .btn:not(:disabled):not(.disabled):active::after {
          content: "";
          width: 10px;
          height: 10px;
          border-radius: 50%;
          top: 4px;
          left: 4.2px;
          background-color: #fff;
          position: absolute;
          transition: ease-in all .4s
      }

      .card-bodyi .btn.btn-light:not(:disabled):not(.disabled).active::after,
      .card-bodyi .btn.btn-light:not(:disabled):not(.disabled):active::after {
          background-color: #000
      }

      #avail-size input[type="checkbox"] {
          visibility: hidden
      }

      #avail-size input[type='checkbox']:checked {
          background-color: #16c79a;
          border: none
      }

      #avail-size .btn.btn-success {
          background-color: #ddd;
          color: #333;
          border: none;
          width: 20px;
          font-size: 0.7rem;
          border-radius: 0;
          padding: 0
      }

      #avail-size .btn.btn-success:hover {
          background-color: #aff1e1;
          color: #444
      }

      #avail-size .btn-success:not(:disabled):not(.disabled).active,
      #avail-size .btn-success:not(:disabled):not(.disabled):active {
          background-color: #16c79a;
          color: #fff
      }

      #avail-size label {
          margin: 10px;
          margin-left: 0px
      }

      #shirt {
          height: 170px
      }

      .middle {
          position: relative;
          width: 100%;
          margin-top: 25px
      }

      .slider {
          position: relative;
          z-index: 1;
          height: 5px;
          margin: 0 15px
      }

      .slider>.track {
          position: absolute;
          z-index: 1;
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
          border-radius: 5px;
          background-color: #ddd
      }

      .slider>.range {
          position: absolute;
          z-index: 2;
          left: 25%;
          right: 25%;
          top: 0;
          bottom: 0;
          border-radius: 5px;
          background-color: #36a31b
      }

      .slider>.thumb {
          position: absolute;
          top: 2px;
          z-index: 3;
          width: 20px;
          height: 20px;
          background-color: #36a31b;
          border-radius: 50%;
          box-shadow: 0 0 0 0 rgba(63, 204, 75, 0.705);
          transition: box-shadow .3s ease-in-out
      }

      .slider>.thumb::after {
          position: absolute;
          width: 8px;
          height: 8px;
          left: 28%;
          top: 30%;
          border-radius: 50%;
          content: '';
          background-color: #fff
      }

      .slider>.thumb.left {
          left: 25%;
          transform: translate(-15px, -10px)
      }

      .slider>.thumb.right {
          right: 25%;
          transform: translate(15px, -10px)
      }

      .slider>.thumb.hover {
          box-shadow: 0 0 0 10px rgba(125, 230, 134, 0.507)
      }

      .slider>.thumb.active {
          box-shadow: 0 0 0 10px rgba(63, 204, 75, 0.623)
      }

      input[type=range] {
          position: absolute;
          pointer-events: none;
          -webkit-appearance: none;
          z-index: 2;
          height: 10px;
          width: 100%;
          opacity: 0
      }

      input[type=range]::-webkit-slider-thumb {
          pointer-events: all;
          width: 30px;
          height: 30px;
          border-radius: 0;
          border: 0 none;
          background-color: red;
          -webkit-appearance: none
      }

      .del {
          text-decoration: line-through;
          color: red
      }

      @media(min-width:1199.6px) {
          #filterbar {
              width: 25%
          }
      }

      @media(max-width:1199.5px) {
          #filterbar {
              width: 28%
          }

          .cardi {
              height: 350px
          }

          .price {
              font-size: 0.9rem
          }

          .product-name {
              font-size: 0.8rem
          }
      }

      @media(max-width: 991.5px) {
          .navbar-nav {
              min-width: 290px;
              position: absolute;
              left: -168px;
              bottom: -146px;
              padding: 20px 10px;
              display: block;
              background-image: none;
              z-index: 2;
              background-color: #1d1c1cb2
          }

          #filterbar {
              width: 36%
          }

          #sort {
              background-color: inherit;
              color: #fff;
              margin: 0;
              margin-bottom: 20px;
              width: 100%
          }

          #sort option,
          #pro option {
              color: #000
          }

          #pro,
          #select2,
          .result {
              background-color: inherit;
              color: #fff
          }

          .card {
              height: 345px
          }

          .price {
              font-size: 0.85rem
          }
      }

      @media(max-width: 767.5px) {
          #filterbar {
              width: 50%
          }
      }

      @media(max-width: 525.5px) {
          #filterbar {
              float: none;
              width: 100%;
              margin-bottom: 20px;
              border-radius: 5px
          }

          #content.my-5 {
              margin-top: 20px !important;
              margin-bottom: 20px !important
          }

          .col-lg-4,
          .col-md-6 {
              padding-left: 0
          }
      }

      @media(max-width: 500.5px) {
          .pagination {
              display: none
          }
      }

    </style>





<br><br>




<br>
<br>




        <section class="py-5 product_data">

            <div class="container px-4 px-lg-5 my-5">

                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 "><img class="card-img-top mb-5 mb-md-0 imga" src="assets/uploads/article/{{ $articles->image }}" alt="{{ $articles->name }}" /></div>

                    <div class="col-md-6">
                        <div class="small mb-1"></div>
                        <h1 class="display-5 fw-bolder">{{ $articles->name }}</h1>
                        <hr>
                        <div class="fs-5 mb-5">

                            <p class="lead">{{ $articles->small_description }}</p>
                            <span >{{ $articles->price }} DA</span>
                        </div>

                        <br>
                        <div class="d-flex">
                            @if($articles->qty>0)

                            <input type="hidden" value="{{ $articles->id }}" class="prod_id">

                            <button class="input-group-text decrement-btn qty-input ">-</button>
                            <input class="form-control text-center qty-input"  value="0" type="text" style="max-width: 3rem" />
                            <button class="input-group-text mr-5 qty-input increment-btn">+</button>


                            <button class="btn btn-outline-dark flex-shrink-1 addToCartBtn" type="button">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>

                        @endif


                        @if($articles->qty==0)

                        <p class="alert alert-info">
                           Out Of Stock!
                          </p>
                        @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>

















        <style>
            .flexContainer {
                display: flex;
            }

            .inputField {
                flex: 1;
            }
        </style>


        @if(Auth::user()&&Auth::user()->role_as==1&&Auth::user()->state==1)




        <div class="col-md-6 mb-3 container mt-5">
            <p> Your Link Will Appear Here</p>
            <div class="flexContainer">

            <br>
            <label for=""></label>

            <input id="demo" type="text" class="inputField"   readonly>

            <button class="btn btn-outline-dark flex-shrink-1 " onclick="myFunction()" type="button" style="float: right;">
                Generate link
            </button>
        </div>

        </div>

        <script>
            function myFunction() {
                var text = "  {{ route('re', ['arti_slug' => $articles->slug,'id' => Auth::user()->id])}}"
                $('#demo').val(text);
                document.getElementById("demo").innerHTML = "{{ route('re', ['arti_slug' => $articles->slug,'id' => Auth::user()->id])}}";
              }
        </script>
        @endif






@endsection

@section('scripts')


<script>





    $(document).ready(function() {

        loadcart();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    function loadcart()
    {
        $.ajax( {
            method:"GET",
            url:"/load-cart",


            success: function(response){



                $('.cart-count').html('');
                $('.cart-count').html(response.count);




            }
        });

    }





        $('.increment-btn').click(function(e) {
            e.preventDefault();
            var inc_value=$('.qty-input').val();
            var value=parseInt(inc_value,10);
             value=isNaN(value)? 0 :value;


            if(value<10)
            {
                value++;
                $('.qty-input').val(value);
            }
        });









        $('.decrement-btn').click(function(e) {
            e.preventDefault();
            var dec_value=$('.qty-input').val();
            var value=parseInt(dec_value,10);
             value=isNaN(value)? 0 :value;

            if(value>1)
            {
                value--;
                $('.qty-input').val(value);
            }
        });




        $('.addToCartBtn').click(function(e) {
            e.preventDefault();
            var product_id=$(this).closest('.product_data').find('.prod_id').val();
            var product_qty=$(this).closest('.product_data').find('.qty-input').val();




            $.ajax( {
                method:"POST",
                url:"/add-to-cart",
                data:{
                    "product_id":product_id,
                    "product_qty":product_qty,
                },

                success: function(response){

                    loadcart();


                    swal(response.status , "");



                }





            });



        });





    });

    });


</script>
<script src="dist/clipboard.min.js"></script>

@endsection
