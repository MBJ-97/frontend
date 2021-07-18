<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--stylesheets-->
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">  
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">    
    <title>Home</title>
</head>
<body> 

    <div id="app" class="font-jost">
        <navbar-component logoimg="{{ asset('/images/assets/main/logo.png')}}"></navbar-component>

        @yield('content')

    </div>

    <!--Vue js-->
<script src=' {{asset('js/app.js') }} '></script>
</body>
</html>
