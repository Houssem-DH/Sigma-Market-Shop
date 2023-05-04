@extends('.admin.layouts.admin')

@section('title')
Edit Slide
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Edit Slide</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('slide-update/'.$slides->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Title</label>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$slides->title }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Descreption</label>
        @error('descreption')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" class="form-control @error('descreption') is-invalid @enderror" name="descreption" value="{{ $slides->descreption }}">
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Position</label>
        @error('position')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ $slides->position  }}">
    </div>
    @if ($slides->image)
    <img src="{{ asset('assets/uploads/slide-images/'.$slides->image) }}" alt="slide image" width="100">

    @endif

    <div class="col-md-12">
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" >
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>

<br>



@endsection
