@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="row col-md-4 col-md-offset-4">
            <h2>Reset Password</h2>
        </div>          
        <form>
            <div class="row col-md-3 col-md-offset-4">
                <label for="name">Email</label>
                <input type="email" placeholder="Email" class="form-control">
            
                <div class="gap">            
                    <button type="button" class="btn btn-primary">Send</button>
                    </div>
                
            </div>
        </form>
    </div>
</div>
    
@endsection