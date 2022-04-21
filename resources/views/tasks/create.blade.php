@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create task') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf

                            <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end" style="position: relative">{{ __('Code')}}</label>
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
                                <label for="theme" class="col-md-4 col-form-label text-md-end" style="position: relative">{{ __('Theme') }}</label>

                                <div class="col-md-6">
                                    <input id="theme" type="text" class="form-control @error('theme') is-invalid @enderror" name="theme" value="{{ old('theme') }}" required autocomplete="theme" autofocus>

                                    @error('theme')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('Task with this topic has already been created!') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status" class="col-md-4 col-form-label text-md-end" style="position: relative">{{ __('Status') }}</label>

                                <div class="col-md-6">
                                    <input id="status" name="status" type="text" class="form-control" required autocomplete="status" value="{{ old('status') }}">
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('Task with this topic has already been created!') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="priority" class="col-md-4 col-form-label text-md-end" style="position: relative">{{ __('Priority') }}</label>

                                <div class="col-md-6">
                                    <input id="priority" name="priority" type="text" class="form-control" required autocomplete="priority" value="{{ old('priority') }}">
                                    @error('priority')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('Task with this topic has already been created!') }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
