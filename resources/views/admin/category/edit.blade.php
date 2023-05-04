@extends('.admin.layouts.admin')



@section('title')
 Edit Category
@endsection

@section('content')






<div class="card container">

    <div class="card-header">
        <h4>Edit Category</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Name</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}" name="name">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Slug</label>
        @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('slug') is-invalid @enderror"  value="{{ $category->slug }}"name="slug">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Descreption</label>
        @error('descreption')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="descreption" rows="3" class="form-control @error('descreption') is-invalid @enderror">{{ $category->descreption }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label for="">new</label>
        <input type="checkbox"  {{ $category->new=='1' ? 'checked':'' }} name="new">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Popular</label>
        <input type="checkbox" {{ $category->popular=='1' ? 'checked':'' }} name="popular">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Title</label>
        <input type="text" class="form-control" value="{{ $category->meta_title }}" name="meta_title">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Keywords</label>
        <textarea name="meta_keywords" rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Descreption</label>
        <textarea name="meta_descrip" rows="3" class="form-control">{{ $category->meta_descrip }}</textarea>
    </div>

    @if ($category->image)
    <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="category image" width="100">

    @endif


    <div class="col-md-12">
        <input type="file" class="form-control" name="image">
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>

<br>



@endsection
