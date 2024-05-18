@extends('layout.app')

@section('contents')



<div class="pt-5 container">

<form action="{{route('registerCaradmin')}}" method="POST" enctype="multipart/form-data">

 @csrf
 

 <div class="form-group">
    <label for="exampleFormControlSelect1">Car Model</label>
    <select name="model_id" class="form-select" aria-label="Default select example">
            <option value="">Select Car Model</option>
            @foreach($models as $model)
            <option value="{{ $model->mymodel_id }}">{{ $model->name }}</option>
            @endforeach
        </select>
  </div>
 

  <div class="form-group">
    <label for="exampleFormControlSelect1">Car Dealer</label>
    <select name="dealer_id" class="form-select" aria-label="Default select example">
            <option value="">Select Car Dealer</option>
            @foreach($dealers as $dealer)
            <option value="{{ $dealer->id }}">{{ $dealer->name }}</option>
            @endforeach
        </select>
  </div>

  
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
  </div>

  <div class="mb-3">
        <label for="formFile" class="form-label">Car Image</label>
        <input name="image" class="form-control" type="file" id="formFile">
    </div>



  <button type="submit" class="btn btn-primary w-full mt-5">Submit</button>
 
</form>
</div>
@endsection