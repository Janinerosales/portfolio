@extends('experience.layout')
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
                <h2>Experience Table</h2>
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
            <th>Year</th>
            <th>Details</th>
            <th>Image</th>
            @if(auth()->user()->role != 'spectator')
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($experiences as $experience)
        <tr>
            <td>{{++$i }}</td>
            <td>{{ $experience->title}}</td>
            <td>{{ $experience->year}}</td>
            <td>{{ $experience->details}}</td>
            <td>
                @if($experience->image)
                <img src="{{'storage/'. $experience->image}}" alt="" style="width: 50px; height: 50px;">
                @else
                <img src="assets/img/jrs-bg.jpg" alt="" style="width: 50px; height: 50px;">
                @endif
            </td>
            @if(auth()->user()->role != 'spectator')
            <td>
                <form action="{{ route('experiences.destroy',$experience->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('experiences.edit',$experience->id) }}">Edit</a>
   
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
        <a class="btn btn-success" href="{{ route('experiences.create') }}"> Create Another</a>
        @endif
    </div>

</body>
</html>
@endsection