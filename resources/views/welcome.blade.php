@extends('layouts.app')

@section('content')
<div style=" height: 700px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative; margin-top:100px" >
    <div style="font-size: 50px; margin-left: 20%; position:absolute; margin-top: 100px">
    <h1 style=" color: #292929;  font-size: 70px; border-bottom: 2px solid #292929; ">Service Desk</h1>
        <p style="color: aliceblue; font-size: 40px">Наш сервис облегчает работу </p>
        <p style="color: aliceblue; font-size: 40px">1000 компаний по всему миру!</p>
    </div>
    <div style="font-size: 50px; margin-left: 70%; margin-top: 100px; background-color: white; border-radius: 3px; width:300px; position: absolute" >
        <h2 style=" font-size: 45px; text-align: center" >Вперед!</h2>
        <div style="color: cadetblue">
        <p class="btn btn-lg btn-primary" style="margin-left: 25%;display: inline-block; border-radius: 3px;" type="button" href="google.com"><a style="text-align: center;text-decoration: none;color:antiquewhite" href="/login">Авторизация</a></p>
        </div>
    </div>
</div>
@endsection
