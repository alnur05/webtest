@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Редактирование задачи') }}</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.update', $task) }}">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="type_id" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Тип') }}</label>

                                <div class="col-md-6">
                                    <select name="type_id" id="type_id" required>
                                        @foreach ($types as $type)
                                            <option
                                                value="{{ $type->id }}"
                                                {{ $type->id == $task->type->id ? 'selected' : '' }}
                                            >{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Код задачи')}}</label>
                                <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $task->code }}" required autocomplete="code" autofocus>

                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{ __('Task with this code has already been created!!') }}</strong> --}}
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Тема') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $task->title }}" required autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status_id" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Статус') }}</label>

                                <div class="col-md-6">
                                    <select name="status_id" id="status_id" required>
                                        @foreach ($statuses as $status)
                                            <option
                                                value="{{ $status->id }}"
                                                {{ $status->id == $task->status->id ? 'selected' : '' }}
                                            >{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('status_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="deadline" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Дедлайн') }}</label>

                                <div class="col-md-6">
                                    <input id="deadline" name="deadline" type="date" class="form-control" required autocomplete="deadline" value="{{ $task->deadline }}">
                                    @error('deadline')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_id" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Исполнитель') }}</label>

                                <div class="col-md-6">
                                    <select name="user_id" id="user_id" required>
                                        @foreach ($users as $user)
                                            <option
                                                value="{{ $user->id }}"
                                                {{ $user->id == $task->user->id ? 'selected' : '' }}
                                            >{{ $user->first_name }} {{ $user->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tester_id" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Тестировщик') }}</label>

                                <div class="col-md-6">
                                    <select name="tester_id" id="tester_id" required>
                                        @foreach ($users as $user)
                                            <option
                                                value="{{ $user->id }}"
                                                {{ $user->id == $task->tester->id ? 'selected' : '' }}
                                            >{{ $user->first_name }} {{ $user->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tester_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <select name="stack_id" id="stack_id" required>
                                        @foreach ($stacks as $stack)
                                            <option
                                                value="{{ $stack->id }}"
                                                {{ $stack->id == $task->stack->id ? 'selected' : '' }}
                                            >{{ $stack->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('stack_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div>
                                {{-- <label for="priority" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Priority') }}</label> --}}
                                <select class="form-select" aria-label="Default select example" id="priority" name="priority" type="text"  required autocomplete="priority" value="{{ $task->priority }}" style="width:20%; margin-left:63%">
                                    <option value="Low">Низки</option>
                                    <option value="Medium">Средний</option>
                                    <option value="High">Высокий</option>
                                  </select>
                                 {{-- <div class="col-md-6">
                                   @error('priority')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              {{--   </div> --}}
                            </div>
                            <div class="mb-3 mt-5">
                                <h3 class="nav justify-content-end">Описание задачи</h1>
                                <label for="text" class="form-label"></label>
                                <textarea class="form-control" id="text" rows="3" name="text">{{ $task->description }}</textarea>
                              </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Редактировать') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

