@extends('about.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Table</h2>
            </div>
            <div class="pull-right mb-2">
               
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($abouts as $about)
        <tr>
            <td>{{ $about->id }}</td>
            <td>{{ $about->name }}</td>
            <td>{{ $about->profile }}</td>
            <td>{{ $about->birthday }}</td>
            <td>{{ $about->address}}</td>
            <td>{{ $about->zipcode }}</td>
            <td>{{ $about->email }}</td>
            <td>{{ $about->phone }}</td>
           
            <td>
                <form action="{{ route('abouts.destroy',$about->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">Edit</a>
   
                    @csrf
                  
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>


</body>
</html>