@extends('.admin.layouts.admin')

@section('title')
Paginate Options
@endsection

@section('content')


@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif
@if(session('status1'))
<script>
    swal("", "{{ session('status1') }}", "error");
</script>
@endif




<div class="card container">

    <div class="card-header">
        <h4>Paginate Options</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('update-paginate-options')}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Articles Paginate Home</label>
        @error('home_n_articles')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number"  class="form-control @error('home_n_articles') is-invalid @enderror" name="home_n_articles" value="{{ $paginate_options->home_n_articles }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Articles Paginate View Category</label>
        @error('view_category_n_articles')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('view_category_n_articles') is-invalid @enderror" name="view_category_n_articles" value="{{ $paginate_options->view_category_n_articles }}">
    </div>

    <div class="col-mb-3">
        <label for="">Category Paginate</label>
        @error('n_categorys')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number"  class="form-control @error('n_category') is-invalid @enderror" name="n_category" value="{{ $paginate_options->n_category }}">
        <br>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Articles Admin Paginate</label>
        @error('n_articles_admin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number"  class="form-control @error('n_articles_admin') is-invalid @enderror" name="n_articles_admin" value="{{ $paginate_options->n_articles_admin }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Category Admin Paginate</label>
        @error('n_category_admin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('n_category_admin') is-invalid @enderror" name="n_category_admin" value="{{ $paginate_options->n_category_admin }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Member Admin Paginate</label>
        @error('n_member_admin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number"  class="form-control @error('n_member_admin') is-invalid @enderror" name="n_member_admin" value="{{ $paginate_options->n_member_admin }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Receveur Admin Paginate</label>
        @error('n_receveur_admin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('n_receveur_admin') is-invalid @enderror" name="n_receveur_admin" value="{{ $paginate_options->n_receveur_admin }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Orders Admin Paginate</label>
        @error('n_orders_admins')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number"  class="form-control @error('n_orders_admin') is-invalid @enderror" name="n_orders_admin" value="{{ $paginate_options->n_orders_admin }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Payments Admin Paginate</label>
        @error('n_payments_admin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" class="form-control @error('n_payments_admin') is-invalid @enderror" name="n_payments_admin" value="{{ $paginate_options->n_payments_admin }}">
    </div>






    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>
</div>
<br><br><br><br><br>



<br><br>


@endsection
