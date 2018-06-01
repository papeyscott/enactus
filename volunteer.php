<?php

$title = 'Volunteer';
include 'includes/header.php';

include 'includes/connection.php';


?>


  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Volunteers</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Volunteer -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-content">
          <div class="row">

            <?php 
                            $stmt = $pdo->prepare("SELECT * FROM volunteer");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    ?>

            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
                <div class="thumb"><img class="img-fullwidth" src="lock/<?php echo $row['img_loc']; ?>" alt="" style="height: 250px; width: 400px;"></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#"><?php echo $row['name'];  ?></a></h4>
                  <p>Volunteer Since - <?php echo $row['year'];  ?></p>
                  <p class="mb-20">Company:- <?php echo $row['company'];  ?></p>
                 
                </div>
              </div>
            </div>  
 <?php } ?>  
             
       
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  





<?php

include 'includes/footer.php';

?>