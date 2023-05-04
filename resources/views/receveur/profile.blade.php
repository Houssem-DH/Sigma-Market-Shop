@extends('layouts.app')

@section('title')
Profile
@endsection

@section('content')
<br>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>








<style>
    .Row {
    display: table;
    width: 100%; /*Optional*/
    table-layout: fixed; /*Optional*/
    border-spacing: 10px; /*Optional*/
}
.Column {
    display: table-cell;

}
</style>




<br>
<br>
<br>
@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif
@if(session('status2'))
<script>
    swal("", "{{ session('status2') }}", "error");
</script>
@endif
<div class="container">


    <div class="card container">

        <div class="card-header">
            <h4>My Profile</h4>
        </div>

        <div class="card-body">



    <div class="row">



        <div class="form-outline">
            <label class="form-label" for="">UserName</label>
            <input type="text" class="form-control" value="{{ Auth::user()->username }}" >

          </div>
          <br>

          <div class="form-outline mt-3">
            <label class="form-label" for="">Email</label>
            <input type="text" class="form-control" value="{{ Auth::user()->email }}" >

          </div>






        <div class="col-md-12 mt-5">
           <a class="btn btn-primary" href="{{ url('edit-profile') }}">Edit</a>
        </div>








    </div>
</div>









    </div>
    <br><br>


    @if(Auth::user()->role_as==0)
    <div class="col-md-12 mt-5">
        <a class="btn btn-primary" href="{{ url('receveur/'.Auth::user()->id) }}">Inscreption Receveur</a>
     </div>
    @endif

    <br><br>








    @if(Auth::user()->role_as==1&&Auth::user()->state==1)

    <form method="POST" action="{{ url('widthraw/'.Auth::user()->id)}}" oninput="myFunction1()">
        @csrf
        @method('PUT')
        <input type="hidden" value="1" name="state">
    <div class="card container">

        <div class="card-header">
            <h4>Cash Transfer</h4>
        </div>

        <div class="card-body">



    <div class="row">


          <div class="Row">
            <div class="Column">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                <label class="form-label"  for="">Points</label>
<h4 class="ml-4">{{ $points->points_count }}</h4>

            </div>
            <div class="Column">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                <label class="form-label"  for="">Pending</label>
<h4 class="ml-4">{{ $points->widthraw }}</h4>

            </div>
            <div class="Column">

                <label class="form-label"  for="">Total Widthraw</label>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
<h4 class="ml-4" > {{ $points->total_widthraw }}</h4>

            </div>
        </div>



        <br><br><br><br>

<br>
          <h6 class="Row">Note : Minimum Withdrawal Amount = {{ $receveur_management->minimum_amount }} Points </h6>


          <div class="col-mb-3 Row">
            <br>

            <label for="">Paypal Email</label>

            @error('paypal_email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="email"  value="{{ $points->paypal_email}}" id="paypal_email" class="form-control @error('paypal_email') is-invalid @enderror" name="paypal_email"  >
        </div>
          <div class="col-md-6 mb-3 Row">
            <br>

            <label for="">Points</label>

            @error('widthraw')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="number"  value="{{ old('widthraw') }}" id="widthraw" class="form-control @error('widthraw') is-invalid @enderror" name="widthraw"  >
        </div>
        <div class="col-md-6 mb-3 Row">
            <br>
            <label for="">Dinar</label>
            @error('points_to_dinar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input  id="demo"  class="form-control @error('points_to_dinar') is-invalid @enderror" name="widthrawd" value="" readonly>

        </div>

        <script>
            function myFunction1() {
              var x = document.getElementById("widthraw").value*{{ $receveur_management->points_to_dinar }} +" DA";
              $('#demo').val(x);


            }
            </script>
        <div class="col-md-12 mt-5 Row">
            <button type="submit" class="btn btn-primary mr-2 " style="text-align:center">
                Widthraw
            </button>
        </div>








    </div>
</div>
</div>
    </form>

        @endif


        <br><br><br>




@endsection

@section('scripts')


@endsection
