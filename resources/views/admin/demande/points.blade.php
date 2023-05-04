@extends('.admin.layouts.admin')


@section('title')
 Paiments Demandes
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
        <h4>Payments Requests</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>UserName</th>
                    <th>Paypal Email</th>
                    <th>Amount</th>

                    <th>Action</th>



                </tr>
            </thead>
            <tbody>

                @foreach ($points as $item)
                @if($item->state=='1')


                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user->username }}</td>
                        <td>{{ $item->paypal_email }}</td>
                        <td>
{{  $item->widthraw*$receveur_management->points_to_dinar}} DA






                        </td>


                        <td>

                            <form method="POST" action="{{ url('points-demandes-accept/'.$item->id)}}">
                                @csrf
                                @method('PUT')

                                <input type="hidden" value="{{ $item->state='0'}}" name="state">


                                        <button type="submit" class="btn btn-primary mr-2" style="text-align:center">
                                            Accept
                                        </button>


                            </form>






                            </td>
                            <td>

                                <form method="POST" action="{{ url('points-demandes-decline/'.$item->id)}}">
                                    @csrf
                                    @method('PUT')

                                    <input type="hidden" value="{{ $item->state='0'}}" name="state">


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

    {{ $points->links() }}
</div>



@endsection
