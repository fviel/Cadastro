<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('titulo')</title>
        <style>
            body {
                padding: 10px;
            }

            .navbar {
                margin-top: 10px;
                margin-bottom: 10px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            @component('components.navbar', [ "paginaCorrente" => $paginaCorrente])                
            @endcomponent
            <main role="main">
                @hasSection ('body')
                    @yield('body')
                @else
                   <p>Falha ao carregar a sessão central.</p> 
                @endif
            </main>
        </div>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>