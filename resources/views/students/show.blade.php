<html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body" ">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Email : {{ $students->email}}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
  </div>
  <button class="new"> <a href="{{ url('student') }}">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back 
                        </a></button>
    </hr>
  
  </div>
</div>
</head>