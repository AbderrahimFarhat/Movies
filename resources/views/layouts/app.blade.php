<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- FONT AWESOM --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{-- My Style --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script>
        
    </script>
</head>
<body>
    <header>
        {{-- <x-nav_bar /> --}}
        <div class="container-fluide my-nav">
            <div class="container">
                <x-new_nav :categories="$categories"/> 
            </div>
        </div>
    </header>
    @yield('content')
    
    <footer>
        <span>made with ❤️ by </span>  
        <a class="logo" href="#"><span>A</span>by<span>F</span>ilms</a>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
