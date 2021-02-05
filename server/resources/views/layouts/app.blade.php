<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap Reboot CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Original Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Original CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Postal_code JS -->
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
</head>

<body class="d-flex flex-column" style="min-height: 100vh">

    <div id="app" class="ml-1">

        <header class="white shadow-sm pl-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 pl-4 pt-2">
                        <a href="/" class="ml-5"><img src="/image/Kakeoku4.png" alt="" class="incart" width="150px"></a>
                    </div>
                    <div class="col-md-10 mt-2">
                        <form action="{{ url('/search') }}" class="form-inline offset-md-4 pl-5">
                            <input class="form-control w-75 grey lighten-3 ml-5" type="text" placeholder="何をお探しですか？"
                                aria-label="何をお探しですか？" name="keyword" value="{{ $keyword ?? '' }}">
                            <button type="submit" class="btn btn-link"><i class="fas fa-search fa-lg text-dark"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-md-12">
                        <ul class="nav mt-1">
                            <li class="nav-item col-8 pl-5">
                                <a class="nav-link text-dark mt-1 font-weight-bold" href="/" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-list mr-1"></i>カテゴリから探す</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">すべて</a>
                                    <a class="dropdown-item" href="#">コンピュータ</a>
                                    <a class="dropdown-item" href="#">家電、AV、カメラ</a>
                                    <a class="dropdown-item" href="#">本、雑誌</a>
                                    <a class="dropdown-item" href="#">映画、ビデオ</a>
                                    <a class="dropdown-item" href="#">おもちゃ、ゲーム</a>
                                    <a class="dropdown-item" href="#">アンティーク、コレクション</a>
                                    <a class="dropdown-item" href="#">スポーツ、レジャー</a>
                                    <a class="dropdown-item" href="#">自動車、オートバイ</a>
                                    <a class="dropdown-item" href="#">ファッション</a>
                                    <a class="dropdown-item" href="#">アクセサリー、時計</a>
                                    <a class="dropdown-item" href="#">食品、飲料</a>
                                    <a class="dropdown-item" href="#">住まい、インテリア</a>
                                    <a class="dropdown-item" href="#">事務、店舗用品</a>
                                    <a class="dropdown-item" href="#">その他</a>
                                </div>
                            </li>
                            @guest
                                <li class="nav-item ml-5">
                                    <a class="nav-link btn btn-primary btn-sm" href="{{ route('login') }}"><span
                                            class="small-font">{{ __('ログイン') }}</span></a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-danger btn-sm " href="{{ route('register') }}"><span
                                                class="small-font">{{ __('新規会員登録') }}</span></a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item mt-1 ml-5">
                                    <a class="nav-link text-dark" href="{{ url('/mypage/like') }}">いいね！一覧</a>
                                </li>
                                <li class="nav-item dropdown mt-1">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        マイページ <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/mypage') }}">マイページ</a>
                                        <a class="dropdown-item" href="{{ url('/mypage/like') }}">いいね！一覧</a>
                                        <a class="dropdown-item" href="{{ url('/sell') }}">出品する</a>
                                        <a class="dropdown-item" href="{{ url('/mypage/sell/now') }}">出品 - 出品中</a>
                                        <a class="dropdown-item" href="{{ url('/mypage/sell/trade') }}">出品 - 取引中</a>
                                        <a class="dropdown-item" href="{{ url('/mypage/sell/end') }}">出品 - 売却済み</a>
                                        <a class="dropdown-item" href="{{ url('/mypage/bid/now') }}">落札 - 参加可能</a>
                                        <a class="dropdown-item" href="{{ url('/mypage/bid/trade') }}">落札 - 取引中</a>
                                        <a class="dropdown-item" href="{{ url('/mypage/bid/end') }}">落札 - 落札済み</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('ログアウト') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </header>

    </div>

    <main class="py-4 mb-4">
        @yield('content')
    </main>

    <footer class="page-footer elegant-color">
        <div class="footer-copyright text-center py-3">2020 Copyright:
            <a href="/"> 賭ケオク.com</a>
        </div>
    </footer>

    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/vendor/jquery-3.4.1.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('js/vendor/jquery-ui-1.10.3.custom.min.js') }}"></script>
    <!-- modernizr JS -->
    <script src="{{ asset('js/vendor/modernizr.custom.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap core JS -->
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <!-- MDB core JS -->
    <script src="{{ asset('js/vendor/mdb.min.js') }}"></script>
</body>

</html>
