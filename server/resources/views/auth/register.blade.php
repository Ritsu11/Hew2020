@extends('layouts.noheader')

@section('content')
    <div class="container mt-1 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card pt-4 pb-4 mr-5">
                    {{-- <div class="card-header">{{ __('アカウントを作成') }}</div> --}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row pl-2 pb-2">
                                <div class="col-md-7 offset-2">
                                    <h1 class="h3">{{ __('アカウントを作成') }}</h1>
                                </div>
                            </div>

                            <div class="row pl-2">
                                <div class="col-md-8 offset-2">
                                    <label for="email" style="margin: 0px">{{ __('ニックネーム') }}</label>
                                    <div class="input-group">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row pl-2 mt-3">
                                <div class="col-md-8 offset-2">
                                    <label for="email" style="margin: 0px">{{ __('メールアドレス') }}</label>
                                    <div class="input-group">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row pl-2 mt-3">
                                <div class="col-md-8 offset-2">
                                    <label for="email" style="margin: 0px">{{ __('パスワード') }}</label>
                                    <div class="input-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row pl-2 mt-3">
                                <div class="col-md-8 offset-2">
                                    <label for="email" style="margin: 0px">{{ __('パスワード確認') }}</label>
                                    <div class="input-group">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 ml-5 pl- mr-3">
                                <div class="col-md-8 offset-1 pr-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('アカウントを作成') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
