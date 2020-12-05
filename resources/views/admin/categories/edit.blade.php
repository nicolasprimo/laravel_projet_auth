@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Categories <span class="font-weight-bold">{{$category->name}}</span> Edit</div>

                <div class="card-body">
                    <form action="{{route('category.update',$category)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="category-name">Category Name</label>
                            <input type="text" class="form-control" id="category-name" aria-describedby="category name"
                                name="name" value="{{$category->name}}">
                        </div>

                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection