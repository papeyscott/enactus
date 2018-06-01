<?php
ob_start();
 
session_start();

include 'includes/connection.php';
include 'includes/functions.php';


$errors = [];
$destination = "";

define('MAX_FILE_SIZE', '2097152');

$ext = ["image/jpg", "image/png", "image/jpeg", "image/jpg"];


if (array_key_exists('submit', $_POST)) {

  if (empty($_POST['title'])) {
    $errors['title'] = "this is a compulsory field";
  }

  if (empty($_POST['story'])) {
    $errors['story'] = "this is a compulsory field";
  }

  if (empty($_FILES['img']['name'])) {
    $errors['img'] = "please select a file";
  }



  if ($_FILES['img']['size'] > MAX_FILE_SIZE) {
    $errors['img'] = "File size too large. allowed is 2mb";
  }

  if (!in_array(strtolower($_FILES['img']['type']), $ext)) {
    $errors['img'] = "File format not supported";
  }

  $check = Utils::uploadFile("uploads/",$_FILES, "img");
  if ($check[0]) {
    $destination = $check[1];
  }else{
    $errors['img'] = "Files  not uploaded";
  }


  if (empty($errors)) {
    $clean = array_map('trim', $_POST);
    $clean['loc'] = $destination;

    Utils::AddPartnership($pdo, $clean);
    Utils::redirect('viewpartnership.php', "Successfully Added");
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

                      $result = mysqli_query($con, "select count(1) FROM partnership");
                      $row = mysqli_fetch_array($result);

                      $total = $row[0];

                      mysqli_close($con);
              ?>
                 <h3><?php echo $total. " items";  ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="addpartnership.php" class="small-box-footer">Add Content <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="viewpartnership.php" class="small-box-footer">View Content <i class="fa fa-arrow-circle-right"></i></a>
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
                   <hr>
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      
                      <div class="box-body">
                            <div class="form-group">
                            <?php Utils::displayError('title', $errors); ?>
                              <label class="col-sm-2 control-label">Title</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Title" name="title">
                              </div>
                            </div>

                            <div class="form-group">
                              <?php Utils::displayError('img', $errors); ?>
                              <label class="col-sm-2 control-label">Upload Image</label>
                             <input type="file" name="img" placeholder="Upload Image">

                            </div>


                            <div class="form-group">
                              <?php Utils::displayError('story', $errors); ?>
                              <label class="col-sm-2 control-label">Story</label>

                              <div class="col-sm-10">
                                <textarea class="form-control"  id="editor1" name="story"></textarea>
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