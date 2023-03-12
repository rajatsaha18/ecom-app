@extends('admin.master')

@section('title')
Manage-Product Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <h3 class="text-center">All Product Info</h3>
            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
            <div class="col-md-12">
                <div class="card card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Category Name</th>
                                <th>Product Name</th>
                                <th>Regular Price</th>
                                <th>Selling Price</th>
                                <th>Product Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $products as $product )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->regular_price }}</td>
                                <td>{{ $product->selling_price }}</td>
                                <td><img src="{{ asset($product->image) }}" alt="" height="70" width="50px"></td>
                                <td>
                                    <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this category ?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
