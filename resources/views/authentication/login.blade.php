@extends('layouts.master')

@section('body')
<div class="row">
    <div class="col-md-offset-5 col-md-3">
        <div class="form-login">
        <h4>Welcome</h4>
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" />
        </br>
        <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="password" />

        <a href="{{route('registration')}}"><small>Create an account?</small></a>
    </br></br>
    <div class="wrapper">
        <span class="group-btn">     
            <a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a>
        </span>
    </div>
</div>
</div>
</div>
@endsection