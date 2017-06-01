@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="row col-md-8 col-md-offset-4">
            <h2> Create New Admin</h2>
        </div>          
        <form action="store" method="post">
            {{ csrf_field() }}
            <div class="row col-md-4 col-md-offset-4">
                <p class="text-danger">{{ $errors->first('first_name') }}</p>
                <label for="name">First Name</label>
                <input type="text" placeholder="First Name" name="first_name" class="form-control">
                
                <p class="text-danger">{{ $errors->first('last_name') }}</p>
                <label for="name">Last Name</label>
                <input type="text" placeholder="Last Name" name="last_name" class="form-control">
                
                <p class="text-danger">{{ $errors->first('email') }}</p>
                <label for="email">Email</label>
                <input type="text" placeholder="Email" name="email" class="form-control">
                
                <p class="text-danger">{{ $errors->first('password') }}</p>
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control">
                
                <p class="text-danger">{{ $errors->first('confirm_password') }}</p>
                <label for="Cpassword">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control">
                
                <div class="gap">            
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </div>
                
            </div>
        </form>
    </div>
</div>
    
@endsection