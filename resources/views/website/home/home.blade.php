@extends('website.master')

@section('title')
Home Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mt-3">
                <div class="card " style="width: 18rem;">
                    <img src="{{ asset($product->image) }}" class="card-img-top mt-3" alt="" height="210" width="110">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <p class="card-text">TK. {{ $product->selling_price }}</p>
                      <a href="{{ route('detail',['id' => $product->id]) }}" class="btn btn-success">Detail</a>
                    </div>
                  </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
@endsection
