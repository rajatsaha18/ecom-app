@extends('admin.master')

@section('title')
Edit-Product Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
            <h5 class="text-center">Edit Product Form</h3>
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('update-product',['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Regular Price</label>
                                <div class="col-sm-10">
                                    <input type="text" name="regular_price" value="{{ $product->regular_price }}" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Selling Price</label>
                                <div class="col-sm-10">
                                    <input type="text" name="selling_price" value="{{ $product->selling_price }}" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Stock Amount</label>
                                <div class="col-sm-10">
                                    <input type="text" name="stock_amount" value="{{ $product->stock_amount }}" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Product Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" id="inputPassword3">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Product Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" id="inputEmail3"/>
                                    <img src="{{ asset($product->image) }}" alt="" height="70" width="50"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-success" value="Update Product"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
