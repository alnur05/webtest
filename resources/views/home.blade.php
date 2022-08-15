@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="card col m-4">
            <div class="card-header mt-2 text-center">
               <h3> {{ __('Задачи созданные вами') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Код задачи</th>
                        <th scope="col">Тема задачи</th>
                        <th scope="col">Приоритет</th>
                        <th scope="col">Статус</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($myTasks as $task)
                        <tr>
                            <th scope="row">
                                <a href="{{ route('tasks.show', $task) }}">{{ $task->code }}</a>
                            </th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->type->name }}</td>
                            <td>{{ $task->status->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="card col m-4">
            <div class="card-header mt-2 text-center">
                <h3>{{ __('Задачи назначенные вам') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Код задачи</th>
                            <th scope="col">Тема задачи</th>
                            <th scope="col">Тип</th>
                            <th scope="col">Статус</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($myTasks as $task)
                            <tr>
                                <th scope="row">
                                    <a href="{{ route('tasks.show', $task) }}">{{ $task->code }}</a>
                                </th>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->type->name }}</td>
                                <td>{{ $task->status->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Таблицы
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="{{route('users.index')}}">Адресная книга</a></li>
          <li><a class="dropdown-item" href="{{ route('tasks.index') }}">Список задач</a></li>
        </ul>
      </div>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-10">
            <a class="btn btn-secondary btn-lg active"  href="{{ route('tasks.create') }}">{{ 'Создать задачу'}}

            </a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <div class="mt-4" style="background-color:azure;">
    <canvas id="myChart" width="400" height="100"></canvas>
    <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
    type: 'bar',
        data: {
        labels: ['Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август'],
        datasets: [{
            label: '# Tasks statistic',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
        </script>
    </div>
</div>
@endsection
