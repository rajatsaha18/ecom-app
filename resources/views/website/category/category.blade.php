@extends('website.master')

@section('title')
Category Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Men Fashion</h2>
            <hr/>
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="" height="210" width="110">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <p class="card-text">TK. 300</p>
                      <a href="{{ route('detail',['id' => $product->id]) }}" class="btn btn-success">Detail</a>
                    </div>
                  </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
@endsection
