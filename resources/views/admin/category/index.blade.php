@extends('.admin.layouts.admin')


@section('title')
 Categories
@endsection

@section('content')

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

<div class="text-center">
    <a href="{{ url('add-category') }}" class="btn btn-primary mx-5" >Add Category</a>
</div>


<br>
<br>


<div class="card container">

    <div class="card-header">
        <h4>Categories</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Descreption</th>
                    <th>Images</th>
                    <th>Actions</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($category as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->descreption }}</td>
                        <td><img src="assets/uploads/category/{{ $item->image }}" alt="image here" class="cate-image"></td>
                        <td><a href="{{ url('edit-category/'.$item->id )}}" class="btn btn-primary">Edit</a></td>


                        <td><a href="{{ url('delete-category/'.$item->id )}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $category->links() }}
</div>

@endsection
