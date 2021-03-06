<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Order Delivery System</title>
        //<link href=" {{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        
        <link rel="manifest" href="/site.webmanifest">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>
        <script src="{{ mix('js/bootstrap.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
    </html>