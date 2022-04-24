@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="card col m-4">
            <div class="card-header mt-2 text-center">
               <h3> {{ __('Tasks created by you') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Theme</th>
                        <th scope="col">Priory</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($myTasks as $task)
                        <tr>
                            <th scope="row">
                                <a href="{{ route('tasks.show', $task) }}">{{ $task->code }}</a>
                            </th>
                            <td>{{ $task->theme }}</td>
                            <td>{{ $task->priority }}</td>
                            <td>{{ $task->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="card col m-4">
            <div class="card-header mt-2 text-center">
                <h3>{{ __('Tasks assigned to you') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-10">
            <a class="btn btn-secondary btn-lg active"  href="{{ route('tasks.create', $task) }}">{{ 'Create task'}}

            </a>
        </div>
    </div>
</div>
@endsection
