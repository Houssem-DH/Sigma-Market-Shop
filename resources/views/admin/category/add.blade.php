@extends('.admin.layouts.admin')


@section('title')
 Add Category
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Add Category</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('categories') }}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Name</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Slug</label>
        @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Descreption</label>
        @error('descreption')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="descreption" rows="3" class="form-control @error('descreption') is-invalid @enderror">{{ old('descreption') }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label for="">new</label>
        <input type="checkbox" name="new">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Popular</label>
        <input type="checkbox" name="popular">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Title</label>
        <input type="text" class="form-control" name="meta_title">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Keywords</label>
        <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Descreption</label>
        <textarea name="meta_descrip" rows="3" class="form-control"></textarea>
    </div>

    <div class="col-md-12">
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>

<br>



@endsection
