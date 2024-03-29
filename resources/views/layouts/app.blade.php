<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    {{-- <link href="/Carousel Template · Bootstrap v5.1_files/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>My app</title>
</head>

<body class="body1">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('welcome') }}">Service desk</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
                        </li>

                @auth
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('users.index') }}">Адресная книга</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <ul>
                            <li style="color:azure">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</li>
                            <form action="/logout" method="POST">
                                @csrf

                                <button type="submit">{{ __('Выход') }}</button>
                            </form>
                        </ul>
                    </div>
                @endauth
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>

    {{-- <script src="js/jquery-2.2.3.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
