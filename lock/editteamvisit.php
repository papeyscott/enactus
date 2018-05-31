<?php ob_start();
session_start();

include 'includes/connection.php';

include 'includes/functions.php';

if (isset($_GET['id'])) {
  $cid = $_GET['id'];
}

$item = Utils::getTeamVisitByID($pdo, $cid);

$sec = Utils::getTeamByID($pdo, $item['name']);

$errors = [];



if (array_key_exists('edit', $_POST)) {

  if (empty($_POST['name'])) {
    $errors['name'] = "please select name";
  }

  if (empty($_POST['story'])) {
    $errors['story'] = "field cannot be empty";
  }

  

  if (empty($errors)) {
    $clean = array_map('trim', $_POST);
    $clean['id'] = $cid;
   // print_r($clean);
    //exit();

    Utils::UpdateTeamVisit($pdo, $clean);
    Utils::redirect('viewteamvisit.php', "Successfully Added");
  }
}

include 'sidebar.php';
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

                      $result = mysqli_query($con, "select count(1) FROM teamvisit");
                      $row = mysqli_fetch_array($result);

                      $total = $row[0];

                      mysqli_close($con);
              ?>
                 <h3><?php echo $total. " items";  ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="addteamvisit.php" class="small-box-footer">Add  Content <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="viewteamvisit.php" class="small-box-footer">View  Content <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        
      </div>
      <!-- /.row -->


      







          <div class="col-md-12">


            <div class="box box-info">
                <div class="box-header text-center">
                  <br><br>
                   <h1 class="box-title"><label class="">PAGES CONTENT</label></h1><br>
                   <hr>
                    <form class="form-horizontal" action="" method="post">
                      <div class="box-body">
                        <div class="form-group">
                          <?php Utils::displayError('name', $errors); ?>
                              <label class="col-sm-2 control-label">PAGES</label>
                              
                                <select  name="name" class="form-control" style="width: 50%;">
                                  <option value="<?php echo $item['name']; ?>"><?php echo $item['name']; ?></option>
                                  <?php

                                      $stmt = $pdo->prepare("SELECT * FROM team");
                                      $stmt->execute();
                                      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        if ($item['name'] == $row['name']) {
                                  continue;
                                }
                                  ?>

                                  <option value="<?php echo $row['name'];  ?>"> <?php echo $row['name']; ?> </option>

                                  <?php } ?>                          
                                   </select>
                          </div>


                            <div class="form-group">
                              <?php Utils::displayError('story', $errors); ?>
                              <label class="col-sm-2 control-label">Story</label>

                              <div class="col-sm-10">
                                <textarea class="form-control" id="editor1" name="story"><?php echo $item['story']; ?></textarea>
                              </div>
                            </div>


                              
                    </div>

                    <div class="box-footer">
                <button type="submit" class="btn btn-info" name="edit">EDIT</button>
              </div>
                    </form>
              </div>
      </div>
      </div>
  </section>

<?php

include 'includes/footer.php';
?>
