@extends('layouts.admin')

@section('content')
@if(session()->has('admin_login_error'))
    {{session()->get('admin_login_error')}}
@endif
<div class="container">
    <div class="col-md-12">
        <div class="row col-md-4 col-md-offset-4">
            <h2>Login Admin</h2>
        </div>          
        <form action="login" method="post">
            {{ csrf_field() }}
            <div class="row col-md-3 col-md-offset-4">
                <p class="text-danger">{{ $errors->first('email') }}</p>
                <label for="name">Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control">
            
                <p class="text-danger">{{ $errors->first('password') }}</p>
                <label for="name">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
                <div class="gap">            
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="http://localhost/Btg/public/admin/login/reset">Forgotten Password</a>
                </div>
                
            </div>
        </form>
    </div>
</div>
    
@endsection