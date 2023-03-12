@extends('website.master')

@section('title')
Product-detail Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="{{ asset('/') }}website/image/img1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1>New T-Shirt</h1>
                    <h3>TK. 600</h3>
                    <p>Product Quantity</p>
                    <input type="number">
                    <a href="{{ route('my-cart') }}" class="btn btn-success mx-auto mt-2">Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, aliquam! Numquam, possimus! Ratione saepe natus molestiae sed iste, fuga adipisci rem veritatis cum, quae ipsum provident laboriosam alias? Laborum, non.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, aliquam! Numquam, possimus! Ratione saepe natus molestiae sed iste, fuga adipisci rem veritatis cum, quae ipsum provident laboriosam alias? Laborum, non.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, aliquam! Numquam, possimus! Ratione saepe natus molestiae sed iste, fuga adipisci rem veritatis cum, quae ipsum provident laboriosam alias? Laborum, non.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, aliquam! Numquam, possimus! Ratione saepe natus molestiae sed iste, fuga adipisci rem veritatis cum, quae ipsum provident laboriosam alias? Laborum, non.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, aliquam! Numquam, possimus! Ratione saepe natus molestiae sed iste, fuga adipisci rem veritatis cum, quae ipsum provident laboriosam alias? Laborum, non.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, aliquam! Numquam, possimus! Ratione saepe natus molestiae sed iste, fuga adipisci rem veritatis cum, quae ipsum provident laboriosam alias? Laborum, non.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
