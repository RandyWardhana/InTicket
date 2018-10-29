<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InTicket | @yield('title')</title>
    <link rel="icon" href="{{ asset('img/ticket.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/jquery-1.12.4.min.js') }}">
</head>
<style>
    .martop-sm {margin-top: 15px;}
    .martop-lg {margin-top: 70px;}
    /* body {background-color: #393e46} */
    select {cursor: pointer}
    body {background-color: #555; color: #fff; font-family: SEGOE UI Symbol}
</style>
<body>
    <div class="container martop-lg">
        <div class="card card-default">
            <div class="card-body">@yield('content')</div>
        </div>
    </div>
</body>
</html>