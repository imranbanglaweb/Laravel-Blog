<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="{{ asset('public/Admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Material Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('public/Admin/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('public/Admin/')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('public/Admin/')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('public/Admin/')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('public/Admin/')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  
  
    <!--  Data Table -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

    <!-- Custom Theme Style -->
    <link href="{{ asset('public/Admin/')}}/build/css/custom.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     
<link href="{{ asset('public/Admin/')}}/style.css" rel="stylesheet"/>


<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>
  </head>
  <body class="nav-md">

<div class="loader"></div>
<div class="outer-box"></div>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Blog With Laravel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!-- <img src="{{ asset('public/Admin/images/img.jpg')}}" alt="" class="img-circle profile_img"> -->
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Imran</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />