@extends('admin.master')

@section('title')
Manage-Category Page
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
            <div class="col-md-12">
                <div class="card card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $categories as $category )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td><img src="{{ asset($category->image) }}" alt="" height="70" width="50px"></td>
                                <td>
                                    <a href="{{ route('edit-category',['id' => $category->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="{{ route('delete-category',['id' => $category->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this category ?')">Delete</a>
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
