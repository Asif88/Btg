@extends('layouts.admin')

@section('content')
@if(session()->has('email'))
    {{session()->get('email')}}
@endif
<div class="col-md-12">
    <form method="post" action="storeCategory">
    {{ csrf_field() }}
    <div class="row col-md-3 col-md-offset-4">
        <input class="form-control" name="title" type="text" placeholder="Add categroy">
    </div>
    <div class="col-md-2">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div> 
    </form>
    <div class="row gap col-md-10 col-md-offset-1">      
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Places</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($categories as $category)                                
                <tr>                    
                    
                    <td>{{$category->title}}<br> <a href="{{route("edit_category",['id'=>$category->id])}}">Edit</a><br><a href="{{route("delete_category",['id'=>$category->id])}}">Delete</a> </td>
                    
                    <td><a href="{{route("add_place",['id'=>$category->id])}}">add place</a><br>
                    
                 @foreach($category->places as $place)
                 {{$place->name}}&nbsp&nbsp&nbsp&nbsp;<a href="{{route("edit_place",['id'=>$place->id])}}">Edit</a>&nbsp&nbsp&nbsp&nbsp;<a href="{{route("delete_place",['id'=>$place->id])}}">Delete</a><br>
                 @endforeach 
                 @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection