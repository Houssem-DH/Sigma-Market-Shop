@extends('.admin.layouts.admin')


@section('title')
 Members
@endsection

@section('content')




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



<div class="card container">

    <div class="card-header">
        <h4>Members</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Role</th>

                    <th>action</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($users as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            @if($item->role_as==0)
                            Client
                            @endif
                            @if($item->role_as==1&&$item->state==0)
                            client
                            @endif
                            @if($item->role_as==1&&$item->state==1)
                            Receveur
                            @endif
                            @if($item->role_as==2)
                            Admin
                            @endif
                        </td>

@if($item->email!=Auth::user()->email)


                        <td><a href="{{ url('edit-member/'.$item->id )}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ url('delete-member/'.$item->id )}}" class="btn btn-danger">Delete</a></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $users->links() }}
</div>

@endsection
