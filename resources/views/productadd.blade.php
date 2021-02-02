@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="save" method="POST"  enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label">Product Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Expiry date</label>
                    <input type="date" name="exdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Gallery</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                  </div>

                
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>  
</div>
@endsection