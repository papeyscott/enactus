<?php
session_start();
$statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
unset($_SESSION['msg'])
?>
<!DOCTYPE html>
<html>
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<!-- Page Title -->
<title>Enactus Nigeria | <?php echo $title; ?></title>

<!-- Favicon and Touch Icons -->
<link href="images/logo.jpg" rel="shortcut icon" type="image/jpg">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117695762-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117695762-1');
</script>

</head>
<body class="boxed-layout bg-img-fixed pt-40 pb-40 pt-sm-0" data-bg-img="images/pattern/p14.png">
<div id="wrapper" class="clearfix">
  <!-- preloader 
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>-->

  <!-- Header -->
  <header class="header">
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-8">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="index.php"><img src="images/enactus.png" alt="" height="900"></a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
               
               
                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                      <li><a href="https://facebook.com/enactusnigeriaofficial"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://twitter.com/Enactus_Nigeria"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://youtube.com/enactusnigeria"><i class="fa fa-youtube"></i></a></li>
                      <li><a href="https://instagram.com/enactusnigeria"><i class="fa fa-instagram"></i></a></li>
                    </ul>
               <a class="font-12 text-gray" href="#">Call us for more details!</a>
              <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-18"></i> +2347036894919</div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-building-o text-theme-colored font-18"></i> Country Office</div>
                <a class="font-12 text-gray" href="#"> Unit 3, Grace Court Building,Beside Stillwater Garden Estate, Eleghusi bus-stop, Lekki Phase 1, Lagos</a>
              </div>
            </div>
          </div>

          
          
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
          <nav id="menuzord" class="menuzord default bg-light">
            <ul class="menuzord-menu">
              <li class="active"><a href="index.php">Home</a>
              </li>
              <li><a href="who.php">About Us</a></li>
              <li><a href="#">Our Community</a>
                <ul class="dropdown">
                  <li><a href="team.php">Teams</a></li>
                  <li><a href="alumni.php">Alumni</a></li>
              <!--    <li><a href="volunteer.php">Volunteers</a>-->
                    <li><a href="staff.php">Staff</a></li>

                    <li><a href="board.php">Board</a></li>

                  
                </ul>
              </li>

              <li><a href="#">Events & Programs</a>
                <ul class="dropdown">
                  <li><a href="conference.php">Leadership Conference</a></li>
                  <li><a href="visitation.php">Team Visitation & Training</a></li>
                  <li><a href="partnership.php">Partnership Projects</a>
                    <li><a href="campus.php">ON-Campus Competition</a></li>
                    <li><a href="nationals.php">National Competition</a></li>
                    <li><a href="http://enactus.org/worldcup/">World Cup</a></li>

                  
                </ul>
              </li>

              <li><a href="#">Get Involved</a>
                <ul class="dropdown">
                  <li><a href="#">Join Us</a>
                    <ul class="dropdown">
                      <li><a href="join.php">Become a Volunteer</a></li>
                      <li><a href="start.php">Start a University Program</a></li>
                    </ul>
                  </li>                  
                  <li><a href="donate.php">Donate</a></li>                   
               </ul>
              </li>

              <li><a href="partners.php">Partners & Sponsors</a>

             
                
            </ul>
            <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5">
             <a class="btn btn-colored btn-flat btn-theme-colored ajaxload-popup" href="donate.php">Donate Now</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  