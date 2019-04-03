<!DOCTYPE html>
 <html>
 <head>
 <title>@yield('title')</title>
 <link rel="stylesheet" href="{!! asset('css/feri.css') !!}" media="screen">
 </head> 
 <body>
 <header> @include('layout.header') </header>
 <ul> @section('sidebar') 
 <li>HTML</li> 
 <li>CSS</li>
 <li>JS</li>
 @show
</ul> 

<div class="container"> @yield('content') </div> </body> </html>