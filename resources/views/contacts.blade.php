<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            html, body {
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-color: #000;
                color: #fff;
            }
            header {
                display: flex;
                justify-content: center;
                background-color: #000;
                padding: 20px 0;
            }
            a {
                margin: 0 15px;
                color: #fff;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
            main {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top: 50px;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
            .content h1 {
               font-size: 36px;
               font-weight: bold;
               text-transform: uppercase; 
            }
            .content h4 {
            font-size: 20px;
            font-weight: normal;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="content">
                        <a href="/">Home</a>
                        <a href="/about_us">About me</a>
                        <a href="/products">Products</a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1>Contacts:</h1>
                        <h4>{{ $descrizione }} <a href="/about_me">About me</a></h4>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
