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
                box-sizing: 0;
            }
            html, body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            }

            body {
            font-family: 'Nunito', sans-serif;
            }
            .content h1{
               font-size: 36px;
               font-weight: bold;
               text-transform: uppercase; 
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="content">
                    <h1>About me:</h1>
                    <a href="/">Home</a>
                </div>
            </div>
        </div>
    </body>
</html>
