<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FurBook</title>
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            @yield('header')
        </div>
        <div class="content">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</body>
</html>