@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <form method="post" action="{{route("update_category",['id'=>$categories->id])}}">
    {{ csrf_field() }}
    <div class="row col-md-3 col-md-offset-5">
        <label for="Edit">Edit Category</label>
    </div>
    <div class="row col-md-3 col-md-offset-4">
         
        <input class="form-control" name="title" type="text" value="{{$categories->title}}">
          
    </div>
    <div class="col-md-2">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div> 
    </form>
</div>
@endsection

