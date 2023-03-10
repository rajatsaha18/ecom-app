@extends('admin.master')

@section('title')
Add-Product Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
            <h5 class="text-center">Add Product Form</h3>
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('new-product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id" id="" required>
                                        <option value="" disabled selected>--Select Category--</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Regular Price</label>
                                <div class="col-sm-10">
                                    <input type="text" name="regular_price" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Selling Price</label>
                                <div class="col-sm-10">
                                    <input type="text" name="selling_price" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Stock Amount</label>
                                <div class="col-sm-10">
                                    <input type="text" name="stock_amount" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Product Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" id="inputPassword3"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Product Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" id="inputEmail3"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-success" value="Add Product"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
