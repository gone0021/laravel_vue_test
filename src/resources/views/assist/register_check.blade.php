@extends('layouts.cardapp')
@section('card')

<div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    {{-- <form method="POST" action="{{ route('register') }}"> --}}
    <form method="POST" action="{{ url('register_add') }}">
        @csrf

        {{-- ユーザーネーム --}}
        <div class="form-group row">
            <label for="u_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-4 mt-2 mb-0">
                <span>{{ $name }}</span>

                <input id="u_name" type="hidden" class="form-control @error('u_name') is-invalid @enderror" name="u_name" value="{{ $u_name }}" required autocomplete="u_name" autofocus>

            </div>
        </div>

        {{-- メールアドレス --}}
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-4 mt-2">
                <span>{{ $email }}</span>
                <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" required autocomplete="email">

            </div>
        </div>

        {{-- 誕生日 --}}
        <div class="form-group row">
            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

            <div class="col-md-6 mt-2">
                <span>{{ $birthday }}</span>
                <input id="birthday" type="hidden" class="form-control @error('email') is-invalid @enderror" name="birthday" value="{{ $birthday }}" required autocomplete="birthday">

            </div>
        </div>

        {{-- パスワード --}}
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6 mt-2">
                <span>{{ $password }}</span>
                <input id="password" type="hidden" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $password }}" required autocomplete="new-password">

            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary mr-3">
                    {{ __('Register') }}
                </button>
                <button type="button" onclick="history.back()" class="btn btn-primary">
                    {{ __('back') }}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
