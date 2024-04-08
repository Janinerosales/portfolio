@extends('educational.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Educational</title>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Educational Table</h2>
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
            <th>Grade Level</th>
            <th>School Year</th>
            <th>School Name</th>
            <th>Description</th>
            @if(auth()->user()->role != 'spectator')
            
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($educationals as $educational)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $educational->grade_level }}</td>
            <td>{{ $educational->school_year }}</td>
            <td>{{ $educational->school_name }}</td>
            <td>{{ $educational->description}}</td>
            @if(auth()->user()->role != 'spectator')
           
            <td>
                <form action="{{ route('educationals.destroy',$educational->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('educationals.edit',$educational->id) }}">Edit</a>
   
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
        <a class="btn btn-success" href="{{ route('educationals.create') }}"> Create Another</a>
        @endif
    </div>

</body>
</html>
@endsection