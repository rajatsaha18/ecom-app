@extends('website.master')

@section('title')
    Home Page
@endsection

@section('body')
    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="slider">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/') }}website/image/img3.jpg" alt="" class="w-100 h-600" />
                <div class="carousel-caption">
                    <h3>This is Carousel One</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae quasi eveniet dicta repudiandae
                        voluptatum vero at autem corrupti, esse hic quas, aspernatur molestiae, ea consequuntur fugit
                        cupiditate architecto molestias. Eum.

                    </p>
                    <a href="" class="btn btn-success">Detail</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}website/image/img2.jpg" alt="" class="w-100 h-600"/>
                <div class="carousel-caption">
                    <h3>This is Carousel Two</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae quasi eveniet dicta repudiandae
                        voluptatum vero at autem corrupti, esse hic quas, aspernatur molestiae, ea consequuntur fugit
                        cupiditate architecto molestias. Eum.

                    </p>
                    <a href="" class="btn btn-success">Detail</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}website/image/img3.jpg" alt="" class="w-100 h-600"/>
                <div class="carousel-caption">
                    <h3>This is Carousel Three</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae quasi eveniet dicta repudiandae
                        voluptatum vero at autem corrupti, esse hic quas, aspernatur molestiae, ea consequuntur fugit
                        cupiditate architecto molestias. Eum.

                    </p>
                    <a href="" class="btn btn-success">Detail</a>
                </div>
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3 mt-3">
                        <div class="card">
                            <img src="{{ asset($product->image) }}" class="" alt=""/>
                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <p>TK. {{ $product->selling_price }}</p>
                                <a href="{{ route('detail', ['id' => $product->id]) }}" class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
