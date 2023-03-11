@extends('admin.master')

@section('title')
    Add-Category Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h5 class="text-center">Add Category Form</h3>
                    <div class="col-md-8 mx-auto">
                        <div class="card card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="inputEmail3"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" id="inputPassword3"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control" id="inputEmail3"/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Add Category</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
