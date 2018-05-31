<?php
$title = 'Home';
include 'includes/header.php';
include 'includes/connection.php';



?>
  
    <!-- Section: Countdown  -->
    <section class="bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <div class="divider call-to-action sm-text-center pt-10 pb-30">
              <div class="col-md-7">
                <h2 class="text-white mt-20 mb-0">Enactus Nigeria Natonal Competiton 2018</h2>
                <h5 class="text-white mt-5">24th - 26th July 2018. ORCHID HOTELS & CONVENTION CENTER, LEKKI, LAGOS.</h5>
                <a class="btn btn-default btn-flat mt-10 mb-5" href="join.php">Join Now</a>
              </div>
              <div class="col-md-5">
                <div class="text-center text-white font-13 pt-30 mt-5" data-countdown="2018/07/24"></div>
                <!-- Final Countdown Timer Script -->
                <script type="text/javascript">
                  $(document).ready(function() {
                    $('[data-countdown]').each(function() {
                      var $this = $(this), finalDate = $(this).data('countdown');
                        $this.countdown(finalDate, function(event) {
                        $this.html(event.strftime('<ul class="list-inline home-countdown"><li><span>%D</span><br> days</li><li><span>%H</span><br> Hours</li><li><span>%M</span><br> Minites</li><li><span>%S</span><br> Seconds</li></ul>'));
                      });
                    });
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br><br>


        <!-- Section: Causes -->
    <!-- Start main-content -->
  <div class="main-content">
    <?php
    include 'carosel.php';

    ?>


   

   
<br><br>
  

    
    <!-- Section: Donors Say -->
    <section>
      <div class="container pt-60 pb-60">

        <div class="row">
          <img src="images/banner.jpg">
        </div>
      </div>
    </section>


  </div>
  <!-- end main-content -->

  <br><br>
  <?php

include 'includes/footer.php';

  ?>