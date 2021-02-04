@extends('layouts.noheader')

@section('content')
    <div class="container mt-1 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card pt-4 pb-4 mr-5">
                    {{-- <div class="card-header">{{ __('ログイン') }}</div> --}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row pl-2 pb-2">
                                <div class="col-md-4 offset-2">
                                    <h1 class="h3">{{ __('ログイン') }}</h1>
                                </div>
                            </div>

                            {{-- メールアドレスinput --}}
                            <div class="row pl-2">
                                <div class="col-md-8 offset-2">
                                    <label for="email" style="margin: 0px">{{ __('メールアドレス') }}</label>
                                    <div class="input-group">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- パスワードinput --}}
                            <div class="row pl-2 mt-3">
                                <div class="col-md-8 offset-2">
                                    <label for="password" style="margin: 0px">{{ __('パスワード') }}</label>
                                    <div class="input-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- パスワード保存checkbox --}}
                            <div class="row mt-3">
                                <div class="col-md-4 offset-2 pl-2">
                                    <div class="pl-4">
                                        <div class="pl-2 pr-1">
                                            <div class="ml-1">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('パスワードを保存') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ログインボタン --}}
                            <div class="row mt-4 ml-5 pl- mr-3">
                                <div class="col-md-8 offset-1 pr-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('ログイン') }}
                                    </button>
                                </div>
                            </div>

                            {{-- パスワードリセットリンク --}}
                            <div class="row mt-2 ml-5 pl-4">
                                <div class="col-md-8 offset-2 pr-5">
                                    <div class="ml-1">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('パスワードを忘れた場合') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
