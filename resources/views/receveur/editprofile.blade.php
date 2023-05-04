@extends('layouts.app')

@section('title')
Edit Profile
@endsection

@section('content')
<br>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif

<br>
<br>
<br>

<div class="container">


    <div class="card container">

        <div class="card-header">
            <h4>My Profile</h4>
        </div>

        <div class="card-body">



    <div class="row">


        <form method="POST" action="{{ url('edit-profile/'.Auth::user()->id)}}">
            @csrf
            @method('PUT')
        <div class="form-outline">
            <label class="form-label" for="">First Name</label>
            <input type="text" class="form-control" name="fname" value="{{ Auth::user()->fname }}" >

          </div>
          <br>

          <div class="form-outline mt-3">
            <label class="form-label" for="">Last Name</label>
            <input type="text" class="form-control" name="lname" value="{{ Auth::user()->lname }}" >

          </div>
          <br>

          <div class="form-outline mt-3">
            <label class="form-label" for="">UserName</label>
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->username }}" readonly>

          </div>
          <br>

          <div class="form-outline mt-3">
            <label class="form-label" for="">Email</label>
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" readonly >

          </div>
          <br>

          <div class="form-outline mt-3">
            <label class="form-label" for="">Address</label>
            <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}" >

          </div>
          <br>

          <div class="form-outline mt-3">
            <label class="form-label" for="">City</label>
            <input type="text" class="form-control" name="city" value="{{ Auth::user()->city }}" >

          </div>
          <br>

          <div class="form-outline mt-3">
            <label class="form-label" for="">state</label>
            <input type="text" class="form-control" name="states" value="{{ Auth::user()->states }}" >

          </div>
          <br>

          <div class="form-outline mt-3">
            <label class="form-label" for="">Zip</label>
            <input type="text" class="form-control" name="zip" value="{{ Auth::user()->zip }}" >

          </div>






        <div class="col-md-12 mt-5">
            <button type="submit" class="btn btn-primary mr-2" style="text-align:center">
                Validate
            </button>
        </div>

    </form>






    </div>
</div>









    </div>
    <br><br>




@endsection
