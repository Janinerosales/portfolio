@extends('educational.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>

</head>
<body>

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="float-left">Edit</h2>
        </div>
    </div>

    @if(session('status'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif

    <form action="{{ route('educationals.update', $educational->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="grade_level">Grade Level:</label>
                    <input type="text" name="grade_level" value="{{ $educational->grade_level }}" class="form-control" placeholder="Grade Level">
                    @error('grade_level')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="school_year">School Year:</label>
                    <input type="text" name="school_year" value="{{ $educational->school_year }}" class="form-control" placeholder="School Year">
                    @error('school_year')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="school_name">School Name:</label>
                    <input type="text" name="school_name" value="{{ $educational->school_name }}" class="form-control" placeholder="School Name">
                    @error('school_name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" value="{{ $educational->description }}" class="form-control" placeholder="Description">
                    @error('description')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-left">
                <a class="btn btn-danger btn-back" href="{{ route('educationals.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

</body>
</html>
@endsection