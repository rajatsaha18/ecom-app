@extends('website.master')

@section('title')
    My Cart Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h1 class="text-center">My Shopping Card</h1>
                        <hr />
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Product Info.</th>
                                    <th>Quantity</th>
                                    <th>Name</th>
                                    <th>Unit Price</th>
                                    <th>SubTotal</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Hello</td>
                                    <td>1</td>
                                    <td>Product</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body">
                        <input type="button" class="btn btn-success mx-auto" value="Continue to Shopping"/>
                        <p class="mt-2">SubTotal : 100</p>
                        <p>TaxTotal : 100</p>
                        <p>ShippingCost : 100</p>
                        <hr/>
                        <p>GrandTotal : 300</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-body">
                        <h1 class="text-center">Checkout Form</h1>
                        <hr />
                        <form action="">
                            <div class="from-group mt-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="from-group mt-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Email"/>
                            </div>
                            <div class="from-group mt-3">
                                <label for="">Mobile</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile"/>
                            </div>
                            <div class="from-group mt-3">
                                <label for="">Address</label>
                                <input type="text" class="form-control" placeholder="Address Here"/>
                            </div>
                            <div class="from-group mt-3">
                                <label for=""></label>
                                <input type="submit" class="btn btn-info" value="Confirm Order"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
