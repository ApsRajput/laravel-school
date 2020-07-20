<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laravel 7/6 CRUD App Example</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   
   <style>
      .top-right {
         position: absolute;
         right: 10px;
         top: 18px;
      }
      .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
      }
   </style>
   </head>
   <body>
   
      <div class="flex-center position-ref full-height">
         <div class="top-right links">
               @if (Route::has('login'))
                  @auth
                     <a href="{{ url('/home') }}">Home</a>
                  @else
                     <a href="{{ route('login') }}">Login</a>

                     @if (Route::has('register'))
                           <a href="{{ route('register') }}">Register</a>
                     @endif
                  @endauth
               @endif
               <a href="{{ url('/students') }}">Students</a>
         </div>
      </div>
      <div class="container">
         @yield('content')
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
   </body>
</html>