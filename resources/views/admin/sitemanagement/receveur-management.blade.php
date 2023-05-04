@extends('.admin.layouts.admin')

@section('title')
Receveur Management
@endsection

@section('content')


@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif
@if(session('status1'))
<script>
    swal("", "{{ session('status1') }}", "error");
</script>
@endif

<br><br>
<div class="card container">

    <div class="card-header">
        <h4>Receveur Link Management</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('update-receveur-link-management')}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Time Duration (On Seconds)</label>
        @error('time')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" step="any" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ $receveur_management->time }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Points On Visite</label>
        @error('points_on_visite')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" step="any" class="form-control @error('points_on_visite') is-invalid @enderror" name="points_on_visite" value="{{ $receveur_management->points_on_visite }}">
    </div>








    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>
</div>

<div></div>
<br>






<br>











<div class="card container">

    <div class="card-header">
        <h4>Widthraw Options</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('update-widthraw-options')}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Minimum Withdrawal Amount</label>
        @error('minimum_amount')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" step="any" class="form-control @error('minimum_amount') is-invalid @enderror" name="minimum_amount" value="{{ $receveur_management->minimum_amount }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Point To Dinar</label>
        @error('points_to_dinar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" step="any" class="form-control @error('points_to_dinar') is-invalid @enderror" name="points_to_dinar" value="{{ $receveur_management->points_to_dinar }}">
    </div>





    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>
</div>

<br><br>




@endsection
