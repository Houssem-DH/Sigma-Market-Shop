@extends('.admin.layouts.admin')

@section('title')
Add Slide
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Add Slide</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('slide-add') }}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Title</label>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Descreption</label>
        @error('descreption')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" class="form-control @error('descreption') is-invalid @enderror" name="descreption" value="{{ old('descreption') }}">
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Position</label>
        @error('position')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}">
    </div>


    <div class="col-md-12">
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>

<br>



@endsection
