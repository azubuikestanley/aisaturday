<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'AI-Saturday') }}</title>
        <meta name="keywords" content="AI-Saturday" />
        <meta name="description" content="AI - Saturday">
        <meta name="author" content="AI - Saturday">
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="{{asset('../css/app.css')}}" rel="stylesheet" />
        <link rel="apple-touch-icon" href="{{asset('../img/icon.png')}}">
        <link rel="icon" href="{{asset('../img/icon.png')}}" type="image/png">


    </head> 
    <body class="profile-page sidebar-collapse">

        <div id="app">
        
            @include('inc.navbar') 
            @include('inc.form')
            @yield('content')
            @include('inc.footer') 

        </div>
   
    
    
        <script src="{{asset('../js/core/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('../js/core/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('../js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('../js/plugins/moment.min.js')}}"></script>
        <!--	Plugin for the Datepicker -->
        <script src="{{asset('../js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
        <!--  Plugin for the Sliders -->
        <script src="{{asset('../js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="{{asset('../js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>
         

    </body>
    </html>