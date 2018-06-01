<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>enactus Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="styles/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="styles/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="styles/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="styles/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="styles/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="styles/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="styles/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="styles/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="styles/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Ba</b>DV</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Baby </b>DEV</span>
    </a>
  
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">CONTROL PANEL</li>
        
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>PAGES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="section.php"><i class="fa fa-circle-o"></i> Section</a></li>
            <li><a href="viewtestimony.php"><i class="fa fa-circle-o"></i>Testimony</a></li>
            <li><a href="viewpartners.php"><i class="fa fa-circle-o"></i> Partners</a></li>
            <li><a href="viewads.php"><i class="fa fa-circle-o"></i> ads</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> People
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="viewboard.php"><i class="fa fa-circle-o"></i>board</a></li>
                <li><a href="viewteam.php"><i class="fa fa-circle-o"></i>team</a></li>
                <li><a href="viewstaff.php"><i class="fa fa-circle-o"></i>staff</a></li>
                <li><a href="viewvolunteer.php"><i class="fa fa-circle-o"></i>volunteers</a></li>
                <li><a href="viewalumni.php"><i class="fa fa-circle-o"></i>alumni</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>Event & Programs
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="viewconference.php"><i class="fa fa-circle-o"></i>Conference</a></li>
                <li><a href="viewteamvisit.php"><i class="fa fa-circle-o"></i>Team Visitation</a></li>
                <li><a href="viewpartnership.php"><i class="fa fa-circle-o"></i>Partnership projects</a></li>
                 <li><a href="viewproject.php"><i class="fa fa-circle-o"></i>Project Showcase</a></li>
                <li><a href="viewcampus.php"><i class="fa fa-circle-o"></i>On-Campus Competition</a></li>
                <li><a href="viewnationals.php"><i class="fa fa-circle-o"></i>National Competition</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="header">INCOME</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Google Adsense</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Google Analytics</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Payment</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php

require_once('topheader.php');

?>