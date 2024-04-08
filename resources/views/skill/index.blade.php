@extends('skill.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skill</title>
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Skill Table</h2>
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
            <th>Expertise</th>
            <th>Percentage</th>
            @if(auth()->user()->role != 'spectator')
            
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $skill->expertise }}</td>
            <td>{{ $skill->percentage }}</td>
            @if(auth()->user()->role != 'spectator')
           
            <td>

                <form action="{{ route('skills.destroy',$skill->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('skills.edit',$skill->id) }}">Edit</a>
   
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
        <a class="btn btn-success" href="{{ route('skills.create') }}"> Create Skill Yourself</a>
        @endif
    </div>
  
</body>
</html>
@endsection