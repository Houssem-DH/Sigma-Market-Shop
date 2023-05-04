@extends('.admin.layouts.admin')


@section('title')
Images Options
@endsection

@section('content')


<div class="text-center">
    <a href="{{ url('/slide-add') }}" class="btn btn-primary mx-5" >Add Slide</a>
</div>


<br>
<br>
@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif
@if(session('status1'))
<script>
    swal("", "{{ session('status1') }}", "success");
</script>
@endif
@if(session('status2'))
<script>
    swal("", "{{ session('status2') }}", "success");
</script>
@endif

<div class="card container">

    <div class="card-header">
        <h4>Slides</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Descreption</th>
                    <th>Position</th>
                    <th>Images</th>
                    <th>Actions</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($slides as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->descreption }}</td>
                        <td>{{ $item->position }}</td>

                        <td><img src="assets/uploads/slide-images/{{ $item->image }}" alt="image here" class="cate-image"></td>
                        <td><a href="{{ url('slide-edit/'.$item->id )}}" class="btn btn-primary">Edit</a></td>


                        <td><a href="{{ url('slide-delete/'.$item->id )}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


<br><br>
<div class="card container">

    <div class="card-header">
        <h4>Logos</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>Image</th>
                    <th>Add</th>
                    <th>Action</th>



                </tr>
            </thead>
            <tbody>


                    <tr>
                        <form action="{{ route('logo') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                        <td>Logo Image</td>

                        <td><img src="assets/uploads/logo/{{ $logos->logo_image }}" alt="image here" class=""></td>
                        <td> <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"></td>
                        <td> <button type="submit" class="btn btn-primary">Update</button></td>

                        </form>

                    </tr>
                    <tr>
                        <form action="{{ route('head-logo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <td>head Image</td>

                        <td><img src="assets/uploads/head-logo/{{ $logos->head_logo_image }}" alt="image here" class=""></td>
                        <td> <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"></td>
                        <td> <button type="submit" class="btn btn-primary">Update</button></td>

                    </form>

                    </tr>

            </tbody>
        </table>
    </div>


</div>
<br><br><br>
@endsection
