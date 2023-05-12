<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Passco') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container" >
        <div class="row">
            <div class="dropdown" >
                <button id="dLabel" role="button" data-toggle="dropdown" class="btn btn-outline-primary">
                    <span>Select</span><span class="caret"></span>
                </button>
                <multi-level-dropdown
                        :nodes="nodes"
                        :id="id"
                        :label="label">
                </multi-level-dropdown>
            </div>
        </div>
        {{--<script>--}}
        {{--$(document).ready(function(){--}}
        {{--$('.dropdown-submenu a.parent-a').on("click", function(e){--}}
        {{--//$(this).next('ul').toggle();--}}
        {{--e.stopPropagation();--}}
        {{--//  e.preventDefault();--}}
        {{--});--}}
        {{--});--}}
        {{--</script>--}}
</div>
</body>
</html>
