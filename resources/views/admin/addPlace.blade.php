@extends('layouts.admin')

@section('content')

<div class="space">
    <div class="row">
        <div class="col-md-1 col-md-offset-1">
            <div class="btn">
                <button>{{$categories->title}}
                </button>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-3">
            <h2>Place Form</h2>
        </div>
        
    </div>
</div>
<form method="post" enctype="multipart/form-data" action="{{route("store_place",['id'=>$categories->id])}}">
    {{ csrf_field() }}
    <div class="col-md-3 col-md-offset-1">
        <label for="name">Place Name*</label>
        <input type="text" placeholder="Add place" name="name" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="street">Street Number</label>
        <input type="text" placeholder="Street Number" name="street" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="title">Title*</label>
        <input type="text" placeholder="Title" name="title" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="city">City</label>
        <input type="text" placeholder="City" name="city" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="fb">Facebook page</label>
        <input type="text" placeholder="Facebook page" name="facebook" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="postal">postal Code</label>
        <input type="text" placeholder="postal Code" name="postal_code" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="twitter">Twitter Page</label>
        <input type="text" placeholder="Twitter page" name="twitter" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="country">Country</label>
        <input type="text" placeholder="Country" name="country" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="google">Google+</label>
        <input type="text" placeholder="Google+" name="g_plus" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="fax">Fax</label>
        <input type="text" placeholder="Fax" name="fax" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="email">Email Address</label>
        <input type="text" placeholder="Email Address" name="email" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone Number</label>
        <input type="text" placeholder="Phone Number" name="phone_number1"  class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="coordinates">Coordinates</label>
        <input type="text" placeholder="Add place" name="coordinates" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone number</label>
        <input type="text" placeholder="Phone Number" name="phone_number2" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
       <label for="video">Upload Video</label>
       <input name="video" type="file">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone number</label>
        <input type="text" placeholder="Phone Number" name="phone_number3" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
       <label for="image">Upload Image1</label>
       <input name="image1" type="file">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="image">Upload Image2</label>
       <input name="image2" type="file">
    </div>
    <div class="col-md-3 col-md-offset-1">
       <label for="image">Upload Image3</label>
       <input name="image3" type="file">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="image">Upload Image4</label>
        <input name="image4" type="file">
    </div>
    <div class="col-md-3 ">
        <label for="image">Upload Image5</label>
       <input name="image5" type="file">
    </div>
    <div class="col-md-10 col-md-offset-1">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" name="description" id="comment"></textarea>
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