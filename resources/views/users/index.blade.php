@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="card col m-4">
            <div class="card-header mt-2 text-center">
               <h3> {{ __('Список сотрудников') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Эл. Почта</th>
                        <th scope="col">Телефон</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name}}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->phone}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row mb-0">
        <div class="col-md-5 offset-md-9">
            <a class="btn btn-secondary btn-lg active"  href="{{ route('register') }}">{{ 'Добавить пользователя'}}

            </a>
        </div>
    </div>
</div>
@endsection
