@extends('master')
@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Expiry Date</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <th scope="row">{{$item['name']}}</th>
                <td>{{$item['price']}}</td>
                <td>{{$item['exdate']}}</td>
                <td> <img class="slider-img" src="{{ asset('uploads/gallery/' . $item->image) }}"></td>
                <td><a href={{"edit/".$item['id']}} class="btn btn-primary">Edit</a></td>
                <td><a href={{"delete/".$item['id']}} class="btn btn-danger">Delete</a></td>
              </tr>
            @endforeach
          
        
        </tbody>
      </table>
@endsection