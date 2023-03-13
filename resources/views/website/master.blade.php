<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}website/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="{{ asset('/') }}website/jquery/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('/') }}website/js/bootstrap.bundle.js"></script>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('my-cart') }}">My Cart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
                            @endforeach


                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('account') }}">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('body')

    <section class="py-3 m-auto bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Design & Develop By <b>Rajat Saha</b></p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
