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
@endsection
