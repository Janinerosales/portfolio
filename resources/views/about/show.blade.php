@extends('about.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">About</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">ABOUT</h5>
        <p class="card-text">Name : {{ $abouts->name }}</p>
        <p class="card-text">Profile: {{ $abouts->profile }}</p>
        <p class="card-text">Birthday: {{ $abouts->birthday }}</p>
        <p class="card-text">Email: {{ $abouts->email}}</p>
        <p class="card-text">Phone: {{ $abouts->phone }}</p>
      
  </div>
       
    </hr>
  
  </div>
</div>