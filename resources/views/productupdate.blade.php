@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/update" method="POST"  enctype="multipart/form-data">
             
              @csrf
              @method('put')
              <input type="hidden" value="{{$product['id']}}" name="id">
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label">Product Name</label>
                  <input type="text" name="name" value="{{$product['name']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input type="text" name="price" value="{{$product['price']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Expiry date</label>
                    <input type="date" name="exdate" value="{{$product['exdate']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Gallery</label>
                    <input type="file" name="image" src="{{ asset('uploads/gallery/' . $product->image) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                  </div>

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>  
</div>
@endsection