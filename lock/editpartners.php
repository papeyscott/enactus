<?php ob_start();
session_start();

include 'includes/connection.php';
include 'includes/functions.php';


if (isset($_GET['id'])) {
  $sfid = $_GET['id'];
}

$item = Utils::getPartnerByID($pdo, $sfid);

$errors = [];

$destination = "";

define('MAX_FILE_SIZE', '2097152');

$ext = ["image/jpg", "image/png", "image/jpeg", "image/jpg"];

if (array_key_exists('submit', $_POST)) {

 
  if (empty($_POST['year'])) {
    $errors['year'] = "field cannot be empty";
  }
  
 


  if (empty($errors)) {
    $clean = array_map('trim', $_POST);
    $clean['id'] = $sfid;
    Utils::updatePartner($pdo, $clean);
    Utils::redirect('viewpartners.php', "Successfully Added");
  }
}



include_once('sidebar.php');
include_once('topheader.php');

?>


<!-- Main content -->
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
              
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php
                      $con = mysqli_connect("localhost","root","");
                      if (!$con) {
                        die('Could not connect: ' . mysql_error());
                      }

                      mysqli_select_db($con, "enactus");

                      $result = mysqli_query($con, "select count(1) FROM partner");
                      $row = mysqli_fetch_array($result);

                      $total = $row[0];

                      mysqli_close($con);
              ?>
                 <h3><?php echo $total. " items";  ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="addpartners.php" class="small-box-footer">Add Content <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $total. " items";  ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="viewpartners.php" class="small-box-footer">View Content <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        
      </div>
      <!-- /.row -->





      <!-- left column -->
        <div class="col-md-12">
          <div class="box box-info">
                <div class="box-header text-center">
                  <br><br>
                   <h1 class="box-title"><label class="">PAGES CONTENT</label></h1><br>
                       <small>please enter current year for the partners of the year or old for others </small>
                    
                   <hr>
                    <form class="form-horizontal" action="" method="post">
                      
                      <div class="box-body">
                            
                            <div class="form-group">
                              <?php Utils::displayError('year', $errors); ?>
                              <label class="col-sm-2 control-label">Year</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control"  value="<?php echo $item['year']; ?>" name="year">
                              </div>
                            </div>

                                                                       
                    <div class="box-footer">
                          <button type="submit" class="btn btn-info" name="submit">Submit</button>
                        </div>
                       </div>
                      </div>
                        
                    </form>
              </div>
      </div>

</section>



<?php

include 'includes/footer.php';

?>