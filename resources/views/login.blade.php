@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="login_email">Email</label>
                    <input type="email" class="form-control" name="login_email" id="login_email" placeholder="Email" title="Please Enter Email">
                </div>
                <div class="form-group">
                    <label for="login_email">Password</label>
                    <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Password" title="Please Enter Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Login</button>
                </div>
            <form>
        </div>
    </div>
</div>

@endsection