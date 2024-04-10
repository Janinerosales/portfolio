@extends ('User.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">    
    
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Role</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
            @foreach($user as $users)
            @if($users->role == 'spectator')
            <td>{{++$i}}</td>
            <td>{{$users->role}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>
                @if(auth()->user()->role == 'Admin')
                <form action="{{route('users.destroy', $users->id)}}" method="POST">
                    <a class="btn btn-primary" href="{{route('users.edit', $users->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @elseif(auth()->user()->id == $users->id)
                <a class="btn btn-primary" href="{{route('users.edit', $users->id)}}">Edit</a>
                <form action="{{route('users.destroy', $users->id)}}" method="POST">
                 @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @endif
            </td>
           
        </tr>
        @endif
        @endforeach
    </table>
    <div class="pull-left">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>
    <div class="pull-left mb-2">
        @if(auth()->user()->role=='Admin')
            <a class="btn btn-success" href="{{route('users.create')}}">Add User</a>
        @endif
    </div>
</body>
</html>
@endsection
