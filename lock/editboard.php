<?php ob_start();
session_start();

include 'includes/connection.php';
include 'includes/functions.php';


if (isset($_GET['id'])) {
  $sfid = $_GET['id'];
}

$item = Utils::getBoardByID($pdo, $sfid);

$errors = [];

$destination = "";

define('MAX_FILE_SIZE', '2097152');

$ext = ["image/jpg", "image/png", "image/jpeg", "image/jpg"];

if (array_key_exists('submit', $_POST)) {

  if (empty($_POST['name'])) {
    $errors['name'] = "this is a compulsory field";
  }

  

  if (empty($_POST['position'])) {
    $errors['position'] = "field cannot be empty";
  }

   if (empty($_POST['designation'])) {
    $errors['designation'] = "field cannot be empty";
  }

  

  if (empty($_POST['company'])) {
    $errors['company'] = "field cannot be empty";
  }


 


  if (empty($errors)) {
    $clean = array_map('trim', $_POST);
    $clean['id'] = $sfid;
    Utils::updateBoard($pdo, $clean);
    Utils::redirect('viewboard.php', "Successfully Added");
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
                      $con = mysqli_connect("localhost","enactuso_root","Sife4words.");
                      if (!$con) {
                        die('Could not connect: ' . mysql_error());
                      }

                      mysqli_select_db($con, "enactuso_enactusweb");

                      $result = mysqli_query($con, "select count(1) FROM board");
                      $row = mysqli_fetch_array($result);

                      $total = $row[0];

                      mysqli_close($con);
              ?>
                 <h3><?php echo $total. " items";  ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="addboard.php" class="small-box-footer">Add People Content <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="viewboard.php" class="small-box-footer">View People Content <i class="fa fa-arrow-circle-right"></i></a>
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
                       <small>Select a people section and add its content </small>
                    
                   <hr>
                    <form class="form-horizontal" action="" method="post">
                      
                      <div class="box-body">
                            <div class="form-group">
                            <?php Utils::displayError('name', $errors); ?>
                              <label class="col-sm-2 control-label">Name</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control"  value="<?php echo $item['name']; ?>" name="name">
                              </div>
                            </div>

                            <div class="form-group">
                              <?php Utils::displayError('position', $errors); ?>
                              <label class="col-sm-2 control-label">Position</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control"  value="<?php echo $item['position']; ?>" name="position">
                              </div>
                            </div>

                            <div class="form-group">
                              <?php Utils::displayError('designation', $errors); ?>
                              <label class="col-sm-2 control-label">Designation</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $item['designation']; ?>" name="designation">
                              </div>
                            </div>

                            
                            <div class="form-group">
                              <?php Utils::displayError('company', $errors); ?>
                              <label class="col-sm-2 control-label">Company</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control"  value="<?php echo $item['company']; ?>" name="company">
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