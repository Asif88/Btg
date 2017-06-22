@extends('layouts.btgLayout')

@section('header')
    @include('header'); 
@endsection

@section('leftPane')
    @include('leftPane')
@endsection

@section('content')
<div class="space">
    <div class=" container col-sm-12">
        <div class="row col-sm-5 col-sm-offset-4 ">
            <h2 style="color:#C00" >{{$selected_place->name}} Bahawalpur</h2>
        </div>
    </div>
    
     <div class="row col-sm-11 col-sm-offset-1">            
                    @foreach($selected_place->resources as $resource)
                    <img src="http://localhost/Btg/storage/app/images/{{$resource->path}}" class="img-rounded" width="140" height="140">
      
                    @endforeach
         </div>
    <div class="row col-sm-10 col-sm-offset-1">
        <h2 class="text-primary" >Description:</h2>
    </div>
    <div class="row col-sm-10 col-sm-offset-1"> 
        <p class="text-info">
            {{$selected_place->description}}
        </p>
    </div>
    <div class=" col-sm-10 col-sm-offset-1">
            <h2 class="text-primary" >Information:</h2>
    </div>
    <div class="row col-sm-10 col-sm-offset-1"> 
        <p class="text-info">
            {{$selected_place->title}}
        </p>
    </div>
    <div class="row col-sm-10 col-sm-offset-0"> 
        <p class="text-info">
            <a href="{{$selected_place->facebook}}">{{$selected_place->facebook}}</a>
        </p>
    </div>
    <div class="row col-sm-10 col-sm-offset-0"> 
        <p class="text-info">
           <a href="{{$selected_place->twitter}}">{{$selected_place->twitter}}</a>
        </p>
    </div>
    
    <div class="row col-sm-10 col-sm-offset-0"> 
        <p class="text-info">
           {{$selected_place->street}}&nbsp;{{$selected_place->city}}&nbsp;{{$selected_place->country}}
        </p>
    </div>
    <div class="row col-sm-10 col-sm-offset-0"> 
        <p class="text-info">
          Postal Code: {{$selected_place->postal_code}}</a>
        </p>
    </div>
    <div class="row col-sm-10 col-sm-offset-0"> 
        <p class="text-info">
            {{$selected_place->phone_number}}</a>
        </p>
    </div>
    
    <div class="row col-sm-10 col-sm-offset-0"> 
        <p class="text-info">
           <a href="{{$selected_place->g_plus}}">{{$selected_place->g_plus}}</a>
        </p>
    </div>
    <div class="row col-sm-10 col-sm-offset-0"> 
        <p class="text-info">
           <a href="{{$selected_place->email}}">{{$selected_place->email}}</a>
        </p>
    </div>
                
    </div>
</div>
@endsection