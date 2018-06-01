<?php ob_start();
session_start();

include 'includes/connection.php';
include 'includes/functions.php';


if (isset($_GET['id'])) {
  $sfid = $_GET['id'];
}

$item = Utils::getAdsByID($pdo, $sfid);

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
    Utils::updateAds($pdo, $clean);
    Utils::redirect('viewads.php', "Successfully Added");
  }
}



include_once('sidebar.php');
include_once('topheader.php');

?>


<!-- Main content -->
<section class="content">





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