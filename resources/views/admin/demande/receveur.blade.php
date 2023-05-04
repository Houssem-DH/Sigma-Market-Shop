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
@if(session('status2'))
<script>
    swal("", "{{ session('status2') }}", "error");
</script>
@endif



<div class="card container">

    <div class="card-header">
        <h4>Receveur Requests</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>UserName</th>
                    <th>Email</th>

                    <th>State</th>
                    <th>action</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($users as $item)
                @if($item->state=='0'&& $item->role_as==1 )


                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>

                        <td>



                           Not Accepted

                        </td>




                        <td>

                            <form method="POST" action="{{ url('receveur-accept/'.$item->id)}}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="{{ $item->id}}" name="user_id">
                                <input type="hidden" value="{{ $item->state='1'}}" name="state">


                                        <button type="submit" class="btn btn-primary mr-2" style="text-align:center">
                                            Accept
                                        </button>


                            </form>
                        </td>
                            <td>

                            <form method="POST" action="{{ url('receveur-decline/'.$item->id)}}">
                                @csrf
                                @method('PUT')


                                <input type="hidden" value="{{ $item->role_as='0'}}" name="state">


                                        <button type="submit" class="btn btn-danger mr-2" style="text-align:center">
                                            Refuse
                                        </button>


                            </form>






                            </td>


                    </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>

    {{ $users->links() }}
</div>

@endsection
