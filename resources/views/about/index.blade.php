@extends('about.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>

</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Table</h2>
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
                <th>Name</th>
                <th>Profile</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Zipcode</th>
                <th>Email</th>
                <th>Phone</th>
                @if(auth()->user()->role != 'spectator')
                <th width="280px">Action</th>
                @endif
            </tr>
            @foreach ($abouts as $about)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $about->name }}</td>
                <td>{{ $about->profile }}</td>
                <td>{{ $about->birthday }}</td>
                <td>{{ $about->address }}</td>
                <td>{{ $about->zipcode }}</td>
                <td>{{ $about->email }}</td>
                <td>{{ $about->phone }}</td>
                @if(auth()->user()->role != 'spectator')
                
                <td>
                    <form action="{{ route('abouts.destroy', $about->id) }}" method="POST">
                        <a class="btn btn-primary btn-sm ml-1" href="{{ route('abouts.edit', $about->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm ml-1">Delete</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>

    <div class="pull-left">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>
    {{-- <div class="pull-left mb-2">
        <a class="btn btn-success" href="{{ route('abouts.create') }}"> Create</a>
    </div> --}}

</body>
</html>
@endsection
