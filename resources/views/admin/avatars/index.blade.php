@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Avatars
                    <a href="{{route('avatar.create')}}" class="btn btn-success btn-sm">Create</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Img</th>
                                <th scope="col">Action</th>                                   
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($avatars as $avatar)
                                <tr>
                                <th scope="row">{{$avatar->id}}</th>
                                    <td>{{$avatar->name}}</td>
                                    <td><img src="{{asset('avatars/'.$avatar->url)}}" alt="" class="img-fluid" width="50px"></td>
                                    <td>
                                        <form action="{{route('avatar.destroy',$avatar)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Del</button>
                                        </form>
                                      
                                    </td>                                  
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
