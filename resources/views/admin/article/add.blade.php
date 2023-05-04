@extends('.admin.layouts.admin')

@section('title')
Add Article
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Add Article</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('articles') }}" method="POST" enctype="multipart/form-data">
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


    <div class="col-md-6 mb-3">
        <label for="">Price</label>
        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" step="any" value="{{ old('price') }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Receveur Percentage</label>
        @error('percentage')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('percentage') is-invalid @enderror" step="any" name="percentage" value="{{ old('percentage') }}">
    </div>

    <div class="form-outline">
        <label class="form-label" for="typeNumber">Quantity</label>
        @error('qty')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="number" id="typeNumber" class="form-control @error('qty') is-invalid @enderror"  value="{{ old('qty') }}" name="qty" />

      </div>




      <div class="form-outline">


        <label class="form-label" for="typeNumber">Tax</label>
        @error('tax')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="number" id="typeNumber" class="form-control @error('tax') is-invalid @enderror" step="any" name="tax" value="{{ old('tax') }}"/>

      </div>


<br>
<br>

    <div class="col-md-12 mb-3">

        <select class="form-select mt-5" name='cate_id' aria-label="Default select example">
            <option selected>Select Category</option>
            @foreach ($category as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach

          </select>
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Descreption</label>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror" >{{ old('description') }}</textarea>
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Small Descreption</label>
        @error('small_description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="small_description" rows="3" class="form-control @error('small_description') is-invalid @enderror">{{ old('small_description') }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label for="">new</label>
        <input type="checkbox" name="new">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">trending</label>
        <input type="checkbox" name="trending">
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
        <textarea name="meta_description" rows="3" class="form-control"></textarea>
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
