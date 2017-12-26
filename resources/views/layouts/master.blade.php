
<!doctype html>
<html ng-app="shop_app">
    <head>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Aangular Material load from CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.1/angular-material.min.js"></script>
    <!-- Angular Application Scripts Load  -->
    <script src="angular/app.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ $title }}</title>
    </head>
    <body >	
       <div class="container">
       <div class="page-header">
         @include('layouts._nav')   
       </div>
        @yield('container')

       </div>

    </body>
</html>
