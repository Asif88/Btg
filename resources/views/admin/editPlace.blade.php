@extends('layouts.admin')

@section('content')

<div class="space">
    <div class="row">
        <div class="col-md-1 col-md-offset-1">
            <div class="btn">
                
                
            </div>
        </div>
        <div class="col-md-2 col-md-offset-3">
            <h2>Place Form</h2>
        </div>
        <div class="col-md-offset-3 col-md-2">
            <a href="#">Delete Place</a>
        </div>
    </div>
</div>
<form method="post" action="{{route("update_place",['id'=>$places->id])}}">
    {{ csrf_field() }}
    <div class="col-md-3 col-md-offset-1">
        <label for="name">Place Name*</label>
        <input type="text" placeholder="Add place" name="name" value="{{$places->name}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="street">Street Number</label>
        <input type="text" placeholder="Street Number" name="street" value="{{$places->street}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="title">Title*</label>
        <input type="text" placeholder="Title" name="title" value="{{$places->title}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="city">City</label>
        <input type="text" placeholder="City" name="city" value="{{$places->city}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="fb">Facebook page</label>
        <input type="text" placeholder="Facebook page" name="facebook" value="{{$places->facebook}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="postal">postal Code</label>
        <input type="text" placeholder="postal Code" name="postal_code" value="{{$places->postal_code}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="twitter">Twitter Page</label>
        <input type="text" placeholder="Twitter page" name="twitter" value="{{$places->twitter}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="country">Country</label>
        <input type="text" placeholder="Country" name="country" value="{{$places->country}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="google">Google+</label>
        <input type="text" placeholder="Google+" name="g_plus"  value="{{$places->g_plus}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="fax">Fax</label>
        <input type="text" placeholder="Fax" name="fax" value="{{$places->fax}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="email">Email Address</label>
        <input type="text" placeholder="Email Address" name="email" value="{{$places->email}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone Number</label>
        <input type="text" placeholder="Phone Number" name="phone_number" value="{{$places->phone_number}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="coordinates">Coordinates</label>
        <input type="text" placeholder="Add place" name="coordinates" value="{{$places->coordinates}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone number</label>
        <input type="text" placeholder="Phone Number" name="phone_number" value="{{$places->phone_number}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
       <label for="video">Upload Video</label>
       <input name="upfile[]" type="file">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone number</label>
        <input type="text" placeholder="Phone Number" name="phone_number" value="{{$places->phone_number}}" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
       <label for="image">Upload Image1</label>
       <input name="upfile[]" type="file">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="image">Upload Image2</label>
       <input name="upfile[]" type="file">
    </div>
    <div class="col-md-3 col-md-offset-1">
       <label for="image">Upload Image3</label>
       <input name="upfile[]" type="file">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="image">Upload Image4</label>
        <input name="upfile[]" type="file">
    </div>
    <div class="col-md-3 ">
        <label for="image">Upload Image5</label>
       <input name="upfile[]" type="file">
    </div>
    <div class="col-md-10 col-md-offset-1">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" name="description" value="{{$places->description}}" id="comment"></textarea>
    </div> 
    <div class="gap col-md-2 col-md-offset-4">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
    <div class="gap col-md-3">
         <input type="submit" value="Add More Places" class="btn btn-primary">
    </div>
    <div class="gap col-md-12">
    </div>
</form>
@endsection