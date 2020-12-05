@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Categories
                    <a href="{{route('category.create')}}" class="btn btn-success btn-sm">Create</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>                                   
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td><a href="http://" class="btn btn-danger btn-sm">Del</a></td>                                  
                                </tr>
                            @endforeach                              
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection