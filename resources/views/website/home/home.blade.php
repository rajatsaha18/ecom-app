@extends('website.master')

@section('title')
Home Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card " style="width: 18rem;">
                    <img src="{{ asset('/') }}website/image/img1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">New T-Shirt</h5>
                      <p class="card-text">TK. 300</p>
                      <a href="{{ route('detail') }}" class="btn btn-success">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card mr-3" style="width: 18rem;">
                    <img src="{{ asset('/') }}website/image/img1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">New Shari</h5>
                      <p class="card-text">TK. 900</p>
                      <a href="#" class="btn btn-success">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card mr-3" style="width: 18rem;">
                    <img src="{{ asset('/') }}website/image/img1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Men Watch</h5>
                      <p class="card-text">TK. 1200</p>
                      <a href="#" class="btn btn-success">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/') }}website/image/img1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Men Watch</h5>
                      <p class="card-text">TK. 1200</p>
                      <a href="#" class="btn btn-success">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/') }}website/image/img1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Men Watch</h5>
                      <p class="card-text">TK. 1200</p>
                      <a href="#" class="btn btn-success">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/') }}website/image/img1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Men Watch</h5>
                      <p class="card-text">TK. 1200</p>
                      <a href="#" class="btn btn-success">Detail</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
