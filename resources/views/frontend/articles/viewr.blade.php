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

    img {
        width: 450px,
        height: 300px
      }















    </style>





<br><br>




<br>
<br>




        <section class="py-5 product_data">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="assets/uploads/article/{{ $articles->image }}" alt="{{ $articles->name }}" /></div>
                    <div class="col-md-6">
                        <div class="small mb-1"></div>
                        <h1 class="display-5 fw-bolder">{{ $articles->name }}</h1>
                        <div class="fs-5 mb-5">
                            <span >{{ $articles->price }} DA</span>

                        </div>
                        <p class="lead">{{ $articles->small_description }}</p>
                        <div class="d-flex">

@php
$string = url();
$string = request()->segment(3);

@endphp

                            @if($articles->qty>0)


                            <input type="hidden" value="{{ $articles->id }}"  class="prod_id">
                            <input type="hidden" value="{{$articles->price}}" class="prod_price">
                            <input type="hidden" value="{{$articles->percentage}}" class="percentage">

                            <input type="hidden" value="{{$string}}" class="receveur_id">

                            <button class="input-group-text decrement-btn qty-input ">-</button>
                            <input class="form-control text-center qty-input"  value="0" type="text" style="max-width: 3rem" />
                            <button class="input-group-text mr-5 qty-input increment-btn">+</button>


                            <button class="btn btn-outline-dark flex-shrink-1 addToCartBtnr" type="button">
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














<br><br>















<br>
<br>
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




        $('.addToCartBtnr').click(function(e) {
        e.preventDefault();
        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        var product_price=$(this).closest('.product_data').find('.prod_price').val();
        var product_qty=$(this).closest('.product_data').find('.qty-input').val();
        var receveur_id=$(this).closest('.product_data').find('.receveur_id').val();
        var percentage=$(this).closest('.product_data').find('.percentage').val();




        $.ajax( {
            method:"POST",
            url: url:"/add-to-cartr",
            data:{
                "product_id":product_id,
                "product_qty":product_qty,
                "product_price":product_price,
                "receveur_id":receveur_id,
                "percentage":percentage,



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
