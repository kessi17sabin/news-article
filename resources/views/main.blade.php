<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font awesome-->
    <link rel="stylesheet"  href="{{asset('frontend/css/font-awesome/css/font-awesome.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">


    <!--adding the css file-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">

    <title>News-Article</title>
  </head>
  <body>

        @yield('content')

    <!-- jQuery JS -->
    <script src="js/jquery.js"></script>


    <!--adding the custom js file-->
<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>

    <!--Popper.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!--bootstrap js-->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  </body>
</html>

