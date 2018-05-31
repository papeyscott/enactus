<?php ob_start();
session_start();

include 'includes/connection.php';
include 'includes/functions.php';


if (isset($_GET['id'])) {
  $sfid = $_GET['id'];
}

$item = Utils::getTeamByID($pdo, $sfid);

$errors = [];


if (array_key_exists('submit', $_POST)) {

  if (empty($_POST['name'])) {
    $errors['name'] = "this is a compulsory field";
  }

  
 if (empty($_POST['name'])) {
    $errors['name'] = "this is a compulsory field";
  }

  if (empty($_POST['fa1'])) {
    $errors['fa1'] = "this is a compulsory field";
  }

   if (empty($_POST['year'])) {
    $errors['year'] = "this is a compulsory field";
  }
  

  

  if (empty($_POST['facebook'])) {
    $errors['facebook'] = "field cannot be empty";
  }

   if (empty($_POST['twitter'])) {
    $errors['twitter'] = "field cannot be empty";
  }  

  if (empty($_POST['instagram'])) {
    $errors['instagram'] = "field cannot be empty";
  }


  if (empty($errors)) {
    $clean = array_map('trim', $_POST);
    $clean['id'] = $sfid;

     Utils::updateTeam($pdo, $clean);
    Utils::redirect('viewteam.php', "Successfully Added");
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

                      $result = mysqli_query($con, "select count(1) FROM team");
                      $row = mysqli_fetch_array($result);

                      $total = $row[0];

                      mysqli_close($con);
              ?>
                 <h3><?php echo $total. " items";  ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="addteam.php" class="small-box-footer">Add People Content <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="viewteam.php" class="small-box-footer">View People Content <i class="fa fa-arrow-circle-right"></i></a>
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
                                <input type="text" class="form-control" value="<?php echo $item['name']; ?>" name="name">
                              </div>
                            </div>

                            <div class="form-group">
                              <?php Utils::displayError('year', $errors); ?>
                              <label class="col-sm-2 control-label">Year Joined</label>

                              <div class="col-sm-10">
                                <input type="number" class="form-control" value="<?php echo $item['year']; ?>" name="year">
                              </div>
                            </div>

                            <div class="form-group">
                              <?php Utils::displayError('fa1', $errors); ?>
                              <label class="col-sm-2 control-label">Faculty Adviser 1</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $item['fa1']; ?>" name="fa1">
                              </div>
                            </div>

                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Faculty adviser 2</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $item['fa2']; ?>" name="fa2">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Faculty adviser 3</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $item['fa3']; ?>" name="fa3">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Facebook</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $item['facebook']; ?>" name="facebook">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Instagram</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control"  value="<?php echo $item['instagram']; ?>" name="instagram">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Twitter</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $item['twitter']; ?>" name="twitter">
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