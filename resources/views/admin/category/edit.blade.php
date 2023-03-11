@extends('admin.master')

@section('title')
    Edit-Category Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                <h5 class="text-center">Edit Category Form</h3>
                    <div class="col-md-8 mx-auto">
                        <div class="card card-body">
                            <form action="{{ route('update-category',['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="inputEmail3"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" id="inputPassword3">{{ $category->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control" id="inputEmail3"/>
                                        <img src="{{ asset($category->image) }}" alt="" height="70" width="50px">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Edit Category</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
