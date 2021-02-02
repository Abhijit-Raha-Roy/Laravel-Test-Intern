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
          </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <th scope="row">{{$item['name']}}</th>
                <td>{{$item['price']}}</td>
                <td>{{$item['exdate']}}</td>
                <td> <img class="slider-img" src="{{ asset('uploads/gallery/' . $item->image) }}"></td>
              </tr>
            @endforeach
        </tbody>
      </table>
@endsection