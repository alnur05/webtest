@extends('layouts.app')

@section('content')
<div class="wrapper">
<div class="container mt-5" style="background-color:aliceblue; border-radius:8px; position:absolute">
    <div>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <h4>{{ $task->code }} - {{$task->theme}}</h1>
            <a href="{{ route('tasks.edit', $task) }}" type="button" class="btn btn-secondary ms-3" style="border-radius:10px">Edit</a>
        </div>
        <div class="ms-5">
        <ul class="list-group list-group-horizontal mt-2  bg-success.bg-gradient">
            <li class="list-group-item">Type: {{ $task->type->name }}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-2">
            <li class="list-group-item">Stack:   {{$task->stack->name }}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-2">
            <li class="list-group-item">Deadline:   {{$task->deadline}}</li>
        </ul>

        @if($task->description)
        <h5>Описание задачи</h5>
        <div>
            {{ $task->description }}
        </div>
        @endif
        </div>

        <!-- Comments -->
        <div class="mt-2 ms-5">
            <form action="{{ route('comments.store', $task) }}" method="post">
                @csrf

                <textarea name="body" id="" cols="30" rows="5"></textarea>
                <button type="submit" class="btn btn-secondary ms-3">Comment</button>
            </form>
            @foreach ($task->comments as $comment)
                <div>
                    <h6>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</h6>
                    <p>{{ $comment->body }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container mt-5 me-5" style="background-color:aliceblue; border-radius:8px; width: 25%;float:right; position:relative; border-line:8px; height:450px">
    <h1>People</h1>
    <div class="ms-5">
        <ul class="list-group list-group-horizontal mt-5  bg-success.bg-gradient">
            <li class="list-group-item">Исполнитель: {{ $task->user->first_name }} {{ $task->user->last_name }}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-5  bg-success.bg-gradient">
            <li class="list-group-item">Tester: {{ $task->tester->first_name }} {{ $task->tester->last_name}}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-5  bg-success.bg-gradient">
            <li class="list-group-item">Created day: {{ $task->created_at->format('Y-m-d') }}</li>
        </ul>
        <ul class="list-group list-group-horizontal mt-5  bg-success.bg-gradient">
            <li class="list-group-item">Deadline: {{ ($task->deadline) }}</li>
        </ul>
    </div>
</div>
</div>



@endsection
