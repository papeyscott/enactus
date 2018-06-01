<?php

$title = 'On-Campus Competition';
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
              <h3 class="title text-white">On Campus Competiton</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9 pull-right flip sm-pull-none">
                                <?php 
                            $stmt = $pdo->prepare("SELECT * FROM campus");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    ?>
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="lock/<?php echo $row['img_loc']; ?>" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600"><?php echo date('F') ?></li>
                        <li class="font-12 text-white text-uppercase"><?php echo date('d') ?></li>
                        <li class="font-12 text-white text-uppercase"><?php echo date('Y') ?></li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0"><a href="#"><?php echo $row['name'];  ?></a></h4>
                      </div>
                    </div>
                  </div>
                  <p class="mb-15"><?php echo $row['story'];  ?></p>
                  <div class="mt-30 mb-0">
                    <h5 class="pull-left mt-10 mr-20 text-theme-colored">Share:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div>
                </div>
              </article>
                     
              
            </div>

            <?php  } ?>
          </div>
          <?php
            include 'sidebar.php';
          ?>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->




<?php

include 'includes/footer.php';

?>