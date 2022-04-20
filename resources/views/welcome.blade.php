@extends('layouts.app')

@section('content')
<div style=" height: 700px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative" >
    <div style="font-size: 50px; margin-left: 20%; position:absolute; margin-top: 100px">
    <h1 style=" color: aliceblue;  font-size: 70px">We are team!</h1>
        <p style="color: aliceblue; font-size: 40px">Our service have 1 position in toplist</p>
    </div>
    <div style="font-size: 50px; margin-left: 70%; margin-top: 100px; background-color: white; border-radius: 3px; width:300px" >
        <h2 style=" font-size: 45px; text-align: center" >Let's go!</h2>
        <div style="color: cadetblue">
        <p class="btn btn-lg btn-primary" style="margin-left: 40%;display: inline-block; border-radius: 3px;" type="button" href="google.com"><a style="text-align: center;text-decoration: none;color:antiquewhite" href="auth.html">Auth</a></p>
            <p class="or">Or</p>
            <p class="btn btn-lg btn-primary" style="margin-left: 22%; display: inline-block; border-radius: 3px;" type="button" action="register.html"><a style="text-align: center; text-decoration: none;color:antiquewhite" href="register.html">Auth with google</a></p>
        </div>
    </div>
</div>
@endsection
