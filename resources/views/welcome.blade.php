<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <section class="hero is-info is-medium">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        {{ config('app.name') }}
                    </h1>
                    <h2 class="subtitle">
                        {{ config('app.description') }}
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="heading">
                    <h4 class="title">Menu</h4>
                    <ul class="nav-menu">
                        <li class="nav-item"><a href="/shops">Shops</a></li>
                        <li class="nav-item"><a href="#">How Does it work</a></li>
                        <li class="nav-item"><a href="#">About Us</a></li>
                        <li class="nav-item"><a href="/register">Register</a></li>
                        <li class="nav-item"><a href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>