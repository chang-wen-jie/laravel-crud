<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP Laravel - Eindopdracht P4</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body style="background-color: #cbd5e0">
        <div class="container">
            <div class="logo-wrapper" style="text-align: center; margin-top: 50px;">
                <img class="netflix-logo" src="{{ url('storage/img/netflix_logo.svg') }}" alt="Netflix" style="width: 300px; margin-bottom: 50px" />
            </div>
            @yield('content')
        </div>
    </body>
</html>
