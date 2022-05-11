@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create task') }}</div>
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
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf

                            <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Code')}}</label>
                                <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{ __('Task with this code has already been created!!') }}</strong> --}}
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="theme" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Theme') }}</label>

                                <div class="col-md-6">
                                    <input id="theme" type="text" class="form-control @error('theme') is-invalid @enderror" name="theme" value="{{ old('theme') }}" required autocomplete="theme" autofocus>

                                    @error('theme')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Status') }}</label>

                                <div class="col-md-6">
                                    <input id="status" name="status" type="text" class="form-control" required autocomplete="status" value="{{ old('status') }}">
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="deadline" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Deadline') }}</label>

                                <div class="col-md-6">
                                    <input id="deadline" name="deadline" type="date" class="form-control" required autocomplete="deadline" value="{{ old('deadline') }}">
                                    @error('deadline')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="performer" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Performer') }}</label>

                                <div class="col-md-6">
                                    <input id="performer" name="performer" type="text" class="form-control" required autocomplete="performer" value="{{ old('performer') }}">
                                    @error('performer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tester" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Tester') }}</label>

                                <div class="col-md-6">
                                    <input id="tester" name="tester" type="text" class="form-control" autocomplete="tester" value="{{ old('tester') }}">
                                    @error('tester')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="stack" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Stack') }}</label>

                                <div class="col-md-6">
                                    <input id="stack" name="stack" type="text" class="form-control" required autocomplete="stack" value="{{ old('stack') }}">
                                    @error('stack')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div>
                                {{-- <label for="priority" class="col-md-4 col-form-label text-md-end mt-3" style="position: relative">{{ __('Priority') }}</label> --}}
                                <select class="form-select" aria-label="Default select example" id="priority" name="priority" type="text"  required autocomplete="priority" value="{{ old('priority') }}" style="width:20%; margin-left:63%">
                                    <option selected>{{''}}</option>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                  </select>
                                 {{-- <div class="col-md-6">
                                    <input id="priority" name="priority" type="text" class="form-control" required autocomplete="priority" value="{{ old('priority') }}"> --}}
                                   @error('priority')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              {{--   </div> --}}
                            </div>
                            <div class="mb-3 mt-5">
                                <h3 class="nav justify-content-end">Task description</h1>
                                <label for="text" class="form-label"></label>
                                <textarea class="form-control" id="text" rows="3" name="text"></textarea>
                              </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
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
