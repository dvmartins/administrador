<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <style>
            body {
                padding: 20px;
                
            }
            
        </style>
        <title>Academico</title>
    </head>
    <body>
        <div class="container">
            <main role="main">
                @hasSection ('content')
                    @yield('content')
                @endif
            </main>
        </div>
        <script src="{{ asset('site/jquery.js') }}"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>
        
        @hasSection('javascript')
            @yield('javascript')
        @endif
    </body>
</html>