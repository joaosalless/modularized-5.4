<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    @yield('styles')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top bg-primary">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('dev.dashboard.index') }}">
                        <h4>{{ config('app.name', 'Laravel') }}</h4>
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    @include("auth::shared.navbar-right")

                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    @include("{$panel->unitAlias()}::nav.sidebar-left")
                </div>
                <div class="col-md-10">
                    @include('alert::messages')
                    @yield('content')
                </div>
            </div>
        </div>

        @include("dev::nav.footer")

    </div>

    <!-- Scripts -->
    {{--<script src="{{ elixir('/js/manifest.js') }}"></script>--}}
    {{--<script src="{{ elixir('/js/vendor.js') }}"></script>--}}
    {{--<script src="{{ elixir('/js/app.js') }}"></script>--}}

    @include('shared.scripts.form')

    @yield('scripts')

</body>
</html>
