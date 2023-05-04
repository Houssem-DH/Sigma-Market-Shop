@extends('layouts.app')

@section('title')
My Orders
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

<div class="card container">

    <div class="card-header">
        <h4>My Orders</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Track Number</th>
                    <th>Total Price</th>
                    <th>State</th>

                    <th>Action</th>




                </tr>
            </thead>
            <tbody>

                @foreach ($orders as $item)



                    <tr>

                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->tracknumber }}</td>
                        <td>{{ $item->total_price }} DA</td>
                        <td>
@if ($item->state==0)
Pending
@endif



@if ($item->state==1)
Accepted
@endif

                        </td>

                        <td><a href="{{ url('view-order/'.$item->id )}}" class="btn btn-primary">View</a></td>





                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>


</div>












<br><br><br><br><br><br><br><br><br><br><br>


@endsection

@section('scripts')

<script>


    $('.cate-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })



</script>

@endsection
