<?php

$title = 'Project Showcase';
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
              <h3 class="title text-white">Project Showcase</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row ">
          <div class="col-md-9">
            <div class="blog-posts">
              <?php 
                            $stmt = $pdo->prepare("SELECT * FROM projects");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    ?>
              <div class="col-md-12">
                <div class="row list-dashed">
                  <article class="post clearfix mb-30 bg-lighter">
                    <div class="entry-header">
                      <div class="post-thumb thumb" style="height:400px; width: 400px"> 
                        <img src="admin/<?php echo $row['img_loc']; ?>" alt="" class="img-responsive img-fullwidth"> 
                      </div>
                    </div>
                    <div class="entry-content p-20 pr-10">
                      <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                          <ul>
                            <li class="font-16 text-white font-weight-600"></li>
                          </ul>
                        </div>
                        <div class="media-body pl-15">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#"><?php echo $row['title'];  ?></a></h4>
                            <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                        -->
                            <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
                          </div>
                        </div>
                      </div>
                      <p class="mt-10"><?php echo $row['story'];  ?></p>
                      <div class="clearfix"></div>
                    </div>
                  </article> 
                           
                </div>
              </div>
             <?php } ?>
            </div>
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