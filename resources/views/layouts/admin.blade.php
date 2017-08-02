<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestor Academico | Panel Control</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- custom scripts --> 


<!-- bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >

<!-- fullcalendar -->

{!! Html::style('bootstrap/css/bootstrap.min.css') !!}<!-- Bootstrap 3.3.5 -->
     {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}<!-- Font Awesome -->
   
     {!! Html::style('dist/css/AdminLTE.min.css') !!}<!-- Theme style -->
     {!! Html::style('dist/css/skins/_all-skins.min.css') !!}    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
     {!! Html::style('plugins/iCheck/flat/blue.css') !!}<!-- iCheck -->
     {!! Html::style('plugins/iCheck/all.css') !!}<!-- iCheck for checkboxes and radio inputs -->
   
     {!! Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}<!-- bootstrap wysihtml5 - text editor -->
     {!! Html::style('plugins/daterangepicker/daterangepicker-bs3.css') !!}<!-- Daterange picker -->
     {!! Html::style('plugins/datepicker/datepicker3.css') !!}<!-- Date Picker -->
     {!! Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}<!-- jvectormap -->
     {!! Html::style('plugins/morris/morris.css') !!}<!-- Morris chart -->
   
   


<link href="fullcalendar/fullcalendar.css" rel="stylesheet" />
<link href="fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
<script src="moment.min.js"></script>
<script src="fullcalendar/fullcalendar.js"></script>

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script src="plugins/fullcalendar/fullcalendar.min.js"></script>


    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>  $("#content-wrapper").css("min-height","2000px"); </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>   

    <script src="plugins/morris/morris.min.js"></script>    <!-- Morris.js charts -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>   <!-- Sparkline -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>    
    <script src="plugins/knob/jquery.knob.js"></script>   <!-- jQuery Knob Chart -->
 <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>   
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>    <!-- datepicker -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>   <!-- Slimscroll -->
    <script src="dist/js/app.min.js"></script> <!-- AdminLTE App -->
    
    <script src="plugins/iCheck/icheck.js"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
 
    <script src="plugins/chartjs/Chart.min.js"></script><!-- ChartJS 1.0.1 -->



     
      
  </head>
  <body>
        @yield('content')
  </body>

</html>
