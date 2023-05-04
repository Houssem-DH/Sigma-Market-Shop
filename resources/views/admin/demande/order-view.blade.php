@extends('.admin.layouts.admin')


@section('title')
 Orders Deatails
@endsection

@section('content')




<br>
<br>
@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif



<div class="pb-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive ">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Total</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                  @php $subtotal="0" @endphp
                  @php $taxtotal="0" @endphp

                  @foreach ($orderitems as $item)

                <tr class="product_data">
                  <input type="hidden" value="{{ $item->articles->id }}" class="prod_id">
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="assets/uploads/article/{{ $item->articles->image }}" alt="Article Image" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="{{ url('article/'.$item->articles->slug) }}" class="text-dark d-inline-block align-middle">{{ $item->articles->name }}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: {{ $item->articles->category->name }}</span>
                      </div>
                    </div>
                  </th>


                  <td class="border-0 align-middle"><strong>{{ $item->articles->price }} DZD</strong></td>
                  <td class="border-0 align-middle"><strong>{{ $item->prod_qty }}</strong></td>
                  @php
                      $total=$item->articles->price*$item->prod_qty
                  @endphp

                  <td class="border-0 align-middle"><strong>{{ $total }}</strong></td>

                </tr>
                @php $taxtotal = $taxtotal + $item->prod_qty * $item->articles->tax @endphp
                @php $subtotal = $subtotal + $item->prod_qty * $item->articles->price @endphp

                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>




      <div style="text-align: right;"><strong>Tax Total: {{ $taxtotal }}</strong></div>
      <div style="text-align: right;"><strong>Sub Total: {{ $subtotal }}</strong></div>
      @php $total = $subtotal + $taxtotal @endphp
      <div style="text-align: right;"><strong>Total: {{ $total }}</strong></div>



























      <br><br>



@endsection
