@extends('layouts.admin')

@section('content')

<div class="space">
    <div class="row">
        <div class="col-md-1 col-md-offset-1">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Categories
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
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
<form>
    <div class="col-md-3 col-md-offset-1">
        <label for="name">Place Name*</label>
        <input type="text" placeholder="Add place" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="street">Street Number</label>
        <input type="text" placeholder="Street Number" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="title">Title*</label>
        <input type="text" placeholder="Title" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="city">City</label>
        <input type="text" placeholder="City" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="fb">Facebook page</label>
        <input type="text" placeholder="Facebook page" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="postal">postal Code</label>
        <input type="text" placeholder="postal Code" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="twitter">Twitter Page</label>
        <input type="text" placeholder="Twitter page" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="country">Country</label>
        <input type="text" placeholder="Country" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="google">Google+</label>
        <input type="text" placeholder="Google+" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="fax">Fax</label>
        <input type="text" placeholder="Fax" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="gmail">Email Address</label>
        <input type="text" placeholder="Gmail Address" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone Number</label>
        <input type="text" placeholder="Phone Number" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
        <label for="coordinates">Coordinates</label>
        <input type="text" placeholder="Add place" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone number</label>
        <input type="text" placeholder="Phone Number" class="form-control">
    </div>
    <div class="col-md-3 col-md-offset-1">
       <label for="video">Upload Video</label>
       <input name="upfile[]" type="file">
    </div>
    <div class="col-md-3 col-md-offset-4">
        <label for="number">Phone number</label>
        <input type="text" placeholder="Phone Number" class="form-control">
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
        <textarea class="form-control" rows="5" id="comment"></textarea>
    </div> 
    <div class="gap col-md-2 col-md-offset-4">
        <button type="button" class="btn btn-primary">Submit</button>
    </div>
    <div class="gap col-md-3">
        <button type="button" class="btn btn-primary">Add Sub Place</button>
    </div>
   <div class="gap col-md-12">
   </div>
</form>
@endsection