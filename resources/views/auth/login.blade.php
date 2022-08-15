@extends('layouts.app')

@section('content')
<div class="container1">
    <div class="signin-content">
        <div class="signin-image">
            <figure><img style="" src="images/signin-image.jpg" alt="sing up image"></figure>
        </div>
        <div class="signin-form">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
            <h2 class="form-title">Авторизация</h2>
            <form method="POST" action="/login" class="register-form" id="login-form">
                @csrf

                <div class="form-group">
                    <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="username" id="username" placeholder="{{ __('Имя пользователя') }}"/>
                </div>
                <div class="form-group">
                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                    <input type="password" name="password" id="password" placeholder="Пароль"/>
                </div>
                <div class="form-group form-button">
                    <input type="submit" name="signin" id="signin" class="form-submit" value="{{ __('Вход') }}"/>
                </div>
            </form>
            {{-- <div class="social-login">
                <span class="social-label">Or login with</span>
                <ul class="socials">
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>
@endsection
