<?php

$title = 'Staff';
include 'includes/header.php';
include 'includes/connection.php';

?>

<!-- Section: volunteers -->
    <section id="team" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0"><span class="text-theme-colored font-weight-600">COUNTRY OFFICE STAFF</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Enactus Nigeria operations are managed by a team of highly dedicated, acountable and dynamic people who are committed to developing the next generation of values driven leaders who are able to take entreprenuerial action towards creating a better and more sustainable world. </p>                        <img src="images/d.png" style="height: 30px; width: 30px;">

            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">

            <?php 
                            $stmt = $pdo->prepare("SELECT * FROM staff");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    ?>


            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="admin/<?php echo $row['img_loc']; ?>" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <h4>Position: <?php echo $row['position'];  ?></h4>
                      <h4>Email: <?php echo $row['email'];  ?></h4>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white"><?php echo $row['name'];  ?></h3>
                  <h5 class="text-white" style="font-size: 15px"><?php echo $row['position'];  ?></h5>

                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="<?php echo $row['facebook'];  ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $row['twitter'];  ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $row['instagram'];  ?>"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

             <?php } ?> 
          </div>
        </div>
      </div>   
    </section>


<?php

include 'includes/footer.php';

?>