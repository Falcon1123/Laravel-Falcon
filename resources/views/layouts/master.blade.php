<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FurBook</title>
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
    
    <!--<script type="text/javascript" src="js/jquery.googlemap.js"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=&key=AIzaSyDX2eVTHVzOjs3Mn-orq80B3L176roo254&callback=initMap&ver=4.7" async defer></script>
    <script src="js/gmapAPI.js"></script>
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