@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Avatars Create</div>

                <div class="card-body">
                <form action="{{route('avatar.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="avatarname">Avatar Name</label>
                        <input type="text" class="form-control" id="avatarname" aria-describedby="avatarName"
                            placeholder="Enter name" name="name">
                       
                    </div>
                        <div class="form-group">
                            <label for="avatar">Avatar File</label>
                            <input type="file" class="form-control-file" id="avatar" name="url">
                        </div>        
                       
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection