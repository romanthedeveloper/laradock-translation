<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel App Test</title>
    </head>
    <body>
        @include("templates.header")
        <div class="container main">
            @yield('content')
        </div>
        @include("templates.footer")

    </body>
    <style>
        body{
            margin: 0;
        }
        .main{
            height: 100%;
            min-height: calc(100vh - 176px);
        }
    </style>
</html>
