@extends('layouts.admin')

@section('content')

<div class="row ">
    <div class="space col-md-3 col-md-offset-4">
        <input class="form-control" type="text" placeholder="Add categroy">
    </div>
    <div class="space">
        <input type="button" value="Submit" class="btn btn-primary">
    </div>   
</div>
<div class="gap">      
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
              <th>Category</th>
              <th>Places</th>
              <th>Category</th>
              <th>Places</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td><a href="http://localhost/Btg/public/admin/places/add">add place</a></td>
                <td></td>
                <td></td>
            </tr>    
        </tbody>
    </table>
</div>
@endsection