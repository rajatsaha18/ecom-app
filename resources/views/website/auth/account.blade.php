@extends('website.master')

@section('title')
Account Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-white bg-danger">
                    <div class="card-header text-center">Login Form</div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group mt-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mt-3">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-dark bg-info">
                    <div class="card-header text-center">Registration Form</div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mt-3">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Registration">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
