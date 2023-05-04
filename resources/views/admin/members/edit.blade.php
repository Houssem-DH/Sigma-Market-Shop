@extends('.admin.layouts.admin')


@section('title')
 Edit Member
@endsection

@section('content')

<div class="card container">

    <div class="card-header">
        <h4>Edit Category</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('update-member/'.$users->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">UserName</label>
        <input type="text" class="form-control" value="{{ $users->username }}" name="name">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Email</label>
        <input type="text" class="form-control"  value="{{ $users->email }}"name="email">
    </div>



    <div class="col-md-6 mb-3">
        <label for="">Admin</label>
        <input type="checkbox"  {{ $users->role_as==2 ? 'checked':'' }} name="role_as">
    </div>




    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


@endsection
