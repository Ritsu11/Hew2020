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
</head>

<body class="d-flex flex-column" style="min-height: 100vh">

    <div id="app">

        <header class="pt-4">
            <div class="container">
                <div class="row ml-3 pb-4">
                    <div class="col offset-4 pl-5">
                        <div class="pr-5">
                            <a href="/" class="ml-4 pl-3"><img src="/image/Kakeoku4.png" alt="" class="incart"
                                    width="150px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    </div>

    <main class="py-4 ml-5 mb-auto">
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
