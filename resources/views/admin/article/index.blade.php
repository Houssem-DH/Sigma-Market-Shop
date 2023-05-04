@extends('.admin.layouts.admin')


@section('title')
Articles
@endsection

@section('content')


<div class="text-center">
    <a href="{{ url('add-article') }}" class="btn btn-primary mx-5" >Add Articles</a>
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
        <h4>Articles</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Receveur Percentage</th>
                    <th>Images</th>
                    <th>Actions</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($articles as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->price }} DA</td>
                        <td>{{ $item->percentage }} %</td>
                        <td><img src="assets/uploads/article/{{ $item->image }}" alt="image here" class="cate-image"></td>
                        <td><a href="{{ url('edit-article/'.$item->id )}}" class="btn btn-primary">Edit</a></td>


                        <td><a href="{{ url('delete-article/'.$item->id )}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $articles->links() }}

</div>

@endsection
