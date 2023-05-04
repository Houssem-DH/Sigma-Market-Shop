@extends('.admin.layouts.admin')


@section('title')
 Orders Demandes
@endsection

@section('content')




<br>
<br>
@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif



<div class="card container">

    <div class="card-header">
        <h4>Orders</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Track Number</th>
                    <th>Total Price</th>
                    <th>State</th>
                    <th>Action</th>




                </tr>
            </thead>
            <tbody>

                @foreach ($orders as $item)
                @if($item->state=='0')


                    <tr>

                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->tracknumber }}</td>
                        <td>{{ $item->total_price }} DA</td>
                        <td>
@if ($item->state==0)
Pending
@endif


<td><a href="{{ url('orders-demandes/view-order/'.$item->id )}}" class="btn btn-primary">view</a> </td>

                        <td>

                            <form method="POST" action="{{ url('orders-demandes-accept/'.$item->id)}}">
                                @csrf
                                @method('PUT')

                                <input type="hidden" value="{{ $item->state='1'}}" name="state">


                                        <button type="submit" class="btn btn-primary mr-2" style="text-align:center">
                                            Accept
                                        </button>


                            </form>






                            </td>




                    </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>
    {{ $orders->links() }}

</div>



@endsection
