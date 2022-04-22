@extends('layouts.app')

@section('content')
<div class="wrapper">
<div class="container mt-5" style="background-color:aliceblue; border-radius:8px; display: flex; position:absolute">
    <div>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <h1>{{ $task->code }} - {{$task->theme}}</h1>
            <button type="button" class="btn btn-secondary ms-3" style="border-radius:10px">Comment</button>
            <button type="button" class="btn btn-secondary ms-3" style="border-radius:10px">Right</button>
            <button type="button" class="btn btn-secondary ms-3" style="border-radius:10px">Edit</button>
        </div>
        <div class="ms-5">
        <ul class="list-group list-group-horizontal mt-2  bg-success.bg-gradient">
            <li class="list-group-item">Type:</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-2">
            <li class="list-group-item">Priority:      {{$task->priority}}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-2">
            <li class="list-group-item">Stack:   {{$task->stack}}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-2">
            <li class="list-group-item">Deadline:   {{$task->deadline}}</li>
        </ul>
        <h5>Описание задачи</h5>
        <div>

        </div>
        </div>
    </div>
</div>
<div class="mt-5 me-5" style="background-color:aliceblue; border-radius:8px; width: 25%;float:right; position:relative; border-line:8px; height:450px">
    <h1>People</h1>
    <div class="ms-5">
        <ul class="list-group list-group-horizontal mt-5  bg-success.bg-gradient">
            <li class="list-group-item">Исполнитель: {{ $task->user->first_name }} {{ $task->user->last_name }}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-5  bg-success.bg-gradient">
            <li class="list-group-item">Tester: {{ $task->tester->first_name }} {{ $task->tester->last_name}}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-5  bg-success.bg-gradient">
            <li class="list-group-item">Created day:{{ $task->created_at->format('d/m/Y') }}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-5  bg-success.bg-gradient">
            <li class="list-group-item">Deadline: {{$task->deadline}}</li>
        </ul>
    </div>
</div>

@endsection
