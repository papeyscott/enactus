<?php

$title = 'Team';
include 'includes/header.php';

include 'includes/connection.php';

?>

<!-- Section: volunteers -->
    <section id="team" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">TEAMS</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">

             <?php 
                            $stmt = $pdo->prepare("SELECT * FROM team ORDER BY RAND()");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    ?>

            <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="admin/<?php echo $row['img_loc']; ?>" class="center img-fullwidth" >
                  <div class="overlay">
                    <div class="content">
                      <h4>Faculty Adviser:<br> <?php echo $row['fa1'];  ?><br>
                                                 <?php echo $row['fa2'];  ?><br>
                                                  <?php echo $row['fa3'];  ?></h4>
                    </div>
                    <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="<?php echo $row['facebook'];  ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $row['twitter'];  ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $row['instagram'];  ?>"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white" style="font-size: 12px;"><?php echo $row['name'];  ?></h3>
                 
                </div>
              </div>
            </div>

            <?php }  ?>

                        
                                     
                
              </div>
            </div>
          </div>
        </div>
      </div>   
    </section>


<?php

include 'includes/footer.php';

?>