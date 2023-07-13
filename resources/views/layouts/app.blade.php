<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{!! asset('../img/cnti-logo.ico') !!}"  type="image/ico"  />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> Prueba Nutibara</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <?php
     header("Access-Control-Allow-Origin: *"); 
     header('Content-Type: text/html; charset=ISO-8859-1');
     ?>
    

    <!-- css-->

    <link href="{!! asset('../css/style.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('../css/bootstrap.css') !!}" rel="stylesheet" type="text/css" />



</head>
<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">



    </div>
   

        <!-- Main view  -->
        @yield('content')
        <!-- Footer -->
    
    </div>
    </div>
</div>


<!-- js-->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('js/inspinia.js')}}"></script>
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="{{asset('js/angular-1.8.2/angular.js')}}"></script>
    <script src="{{asset('js/angular-1.8.2/ui-bootstrap-tpls-2.5.0.min.js')}}"></script>
    <script src="{{asset('js/angular-1.8.2/angular-messages.js')}}"></script>
    <script src="{{asset('js/angular-1.8.2/angular-route.js')}}"></script>
    <script src="{{asset('js/angular-1.8.2/i18n/angular-locale_es-co.js')}}"></script>

      <!-- Input Mask-->
      <script src="js/plugins/jqueryMask/jquery.mask.min.js"></script>

    @yield('scripts_page')
</body>
</html>




