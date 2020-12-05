@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Avatars <span class="font-weight-bold">{{$avatar->name}}</span> Edit</div>

                <div class="card-body">
                    <form action="{{route('avatar.update',$avatar)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="avatar-name">Avatar Name</label>
                            <input type="text" class="form-control" id="avatar-name" aria-describedby="avatar name"
                                name="name" value="{{$avatar->name}}">
                        </div>

                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


