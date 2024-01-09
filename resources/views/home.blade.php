@extends('layout.app')

@section('title')
Event
@endsection

@section('content')
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Event View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                    <form action="{{route('saveStudent')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="productName" class="form-label">Event</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="description" class="form-label">Event Participants</label>
                                    <input type="text" class="form-control" name="student_id" required>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary float-end">ADD</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Event</th>
                                <th>Event Participants</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products)
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{$product->id}}</th>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->student_id}}</td>
                                        <td>
                                            <a href="{{route('updateStudent', $product->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                                            <a href="{{route('removeStudent', $product->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
@endsection 