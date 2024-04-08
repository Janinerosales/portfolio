@extends('webinar.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Experience</title>

  
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Webinar Table</h2>
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
            <th>Title</th>
            <th>Agenda</th>
            <th>Host Name</th>
            <th>Date</th>
            @if(auth()->user()->role != 'spectator')
           
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($webinars as $webinar)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $webinar->title}}</td>
            <td>{{ $webinar->agenda}}</td>
            <td>{{ $webinar->host_name}}</td>
            <td>{{ $webinar->date}}</td>
            @if(auth()->user()->role != 'spectator')
           
           
            <td>
                <form action="{{ route('webinars.destroy',$webinar->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('webinars.edit',$webinar->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </table>

    <div class="pull-left">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>
    <div class="pull-left mb-2">
        @if(auth()->user()->role != 'spectator')
        <a class="btn btn-success" href="{{ route('webinars.create') }}"> Create</a>
        @endif
    </div>


</body>
</html>
@endsection