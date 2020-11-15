<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GB</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{{asset('css/bootstrap.min.css')}}}" crossorigin="anonymous">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{{asset('css/font-awesome.min.css')}}}" crossorigin="anonymous">
        <script src="{{{asset('js/jquery-3.5.1.slim.min.js')}}}" crossorigin="anonymous"></script>
        <script src="{{{asset('js/popper.min.js')}}}" crossorigin="anonymous"></script>
        <script src="{{{asset('js/bootstrap.min.js')}}}" crossorigin="anonymous"></script>

        <style>

            @font-face{
                font-family: AbelFont;
                src: url("fonts/abel/abel.ttf");
            }


            * {
                font-family: AbelFont;
            }

            main,
            footer {
                margin-top: 15px;
            }

        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">GB</a>
            </nav>
        </header>

        <div class="container">
            <main>
                @yield('content')
            </main>

            <hr role="separator"/>
            <footer>
                <div>
                    &copy; GB
                </div>
            </footer>
        </div>

    </body>
</html>
