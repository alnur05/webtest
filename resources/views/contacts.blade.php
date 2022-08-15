@extends('layouts.app')

@section('content')
<div style="background-color: #292929; margin-left:25%; margin-right:15%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.766355297574!2d76.93106045386011!3d43.23535807826086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836ed9f0e71d67%3A0x6c40134cf68ca043!2z0JDQu9C80LDRgtC40L3RgdC60LjQuSDQo9C90LjQstC10YDRgdC40YLQtdGCINCt0L3QtdGA0LPQtdGC0LjQutC4INC4INCh0LLRj9C30Lgg0LjQvNC10L3QuCDQk9GD0LzQsNGA0LHQtdC60LAg0JTQsNGD0LrQtdC10LLQsA!5e0!3m2!1sru!2skz!4v1653299048052!5m2!1sru!2skz" height=300 style="border:5%; position:relative; float:left; margin-top:10px; margin-left:10px" allowfullscreen="" loading="lazy" referrerpolicy="">
    </iframe>
    <div style="position: relative; text-align: right; color:aliceblue; margin-right:10%; margin-top: 10%">
        <h2  style="color:aliceblue">Как нас найти?</h2>
        <h4>Казахстан, г. Алматы, ул. Байтырсунова 126/1</h4>
        <h2 style="margin-top:30px; color:aliceblue">В чем наше преимущество?</h2>
        <h4 >Удобный дизайн, легко восприятен для глазами</h4>
        <h4>Отчетность</h4>
        <h4>Графики</h4>
        <h4>Мобильные страницы</h4>
    </div>
</div>
    {{-- </iframe> --}}
{{-- <div class="container mt-5 me-5" style="position: relative; text-align: left; background-color:aliceblue;"></div> --}}
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="8">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" src="images/carousel.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection
