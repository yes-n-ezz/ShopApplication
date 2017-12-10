<!doctype html>
<html ng-app="shop">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <title>{{ $title }}</title>
	
    </head>
    <body >	
<div class="container">
  <div class="page-header">
 @include('layouts._nav')   
</div>
@yield('container')
    </body>
</html>
