 <!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>
     <!-- css file  -->
     @include('include.csslib')

 </head>

 <body>

     @include('navbars.nav')
     <div class="pusher">
         @yield('meinmenu')
         @yield('content')
     </div>


     <!-- java script file -->
     @include('include.jslib')

     <!-- SweetAlert2 Message -->
     @include('include.messages')
 </body>

 </html>
