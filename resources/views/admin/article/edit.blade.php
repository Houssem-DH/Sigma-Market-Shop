@extends('.admin.layouts.admin')

@section('title')
 Edit Article
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Add Article</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('update-article/'.$articles->id) }}" method="POST" enctype="multipart/form-data">
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
        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $articles->name }}" name="name">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Slug</label>
        @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{ $articles->slug }}" name="slug">
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Price</label>
        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('price') is-invalid @enderror" step="any" name="price" value="{{ $articles->price }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Receveur Percentage</label>
        @error('percentage')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('percentage') is-invalid @enderror" step="any" name="percentage" value="{{ $articles->percentage }}">
    </div>





      <div class="form-outline">
        <label class="form-label" for="typeNumber">Quantity</label>
        @error('qty')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="number" id="typeNumber" class="form-control @error('qty') is-invalid @enderror"  value="{{ $articles->qty }}" name="qty" />

      </div>


      <div class="form-outline">


        <label class="form-label" for="typeNumber">Tax</label>
        @error('tax')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="number" id="typeNumber" class="form-control @error('tax') is-invalid @enderror" step="any" value="{{ $articles->tax }}" name="tax" />

      </div>


<br>
<br>

    <div class="col-md-12 mb-3">
        <select class="form-select mt-5"  aria-label="Default select example">
            <option selected>Select Category</option>

            <option value="">{{ $articles->category->name }}</option>


          </select>
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Descreption</label>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ $articles->description }}</textarea>
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Small Descreption</label>
        @error('small_description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="small_description" rows="3" class="form-control @error('small_description') is-invalid @enderror">{{ $articles->small_description }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label for="">new</label>
        <input type="checkbox" {{ $articles->new=='1' ? 'checked':'' }}  name="new">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">trending</label>
        <input type="checkbox"  {{ $articles->trending=='1' ? 'checked':'' }} name="trending">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Title</label>
        <input type="text" class="form-control" value="{{ $articles->meta_title }}"name="meta_title">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Keywords</label>
        <textarea name="meta_keywords" rows="3" class="form-control">{{ $articles->meta_keywords }}"</textarea>
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Meta Descreption</label>
        <textarea name="meta_description" rows="3" class="form-control">{{ $articles->meta_description }}</textarea>
    </div>
    @if ($articles->image)
    <img src="{{ asset('assets/uploads/article/'.$articles->image) }}" alt="category image" width="100">

    @endif

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
