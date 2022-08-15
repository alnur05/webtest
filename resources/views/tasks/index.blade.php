@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="card col m-4">
            <div class="card-header mt-2 text-center">
               <h3> {{ __('Список задач') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Код задачи</th>
                        <th scope="col">Тема задачи</th>
                        <th scope="col">Приорите</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Сотрудник</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <th scope="row">
                                <a href="{{ route('tasks.show', $task) }}">{{ $task->code }}</a>
                            </th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->type->name }}</td>
                            <td>{{ $task->status->name }}</td>
                            <td>{{ $task->user->first_name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
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
        labels: ['Maxie Romaguera', 'Theodare Maggio', 'Edwina Kihn', 'Alnur Tynyshbek', 'Oren Kovacek', 'Norval Kris'],
        datasets: [{
            label: '# of Votes',
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
@endsection
