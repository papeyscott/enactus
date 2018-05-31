<?php ob_start();
session_start();

include 'includes/connection.php';
include 'includes/functions.php';

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

                      $result = mysqli_query($con, "select count(1) FROM volunteer");
                      $row = mysqli_fetch_array($result);

                      $total = $row[0];

                      mysqli_close($con);
              ?>
                 <h3><?php echo $total. " items";  ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="addvolunteer.php" class="small-box-footer">Add  Content <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="viewvolunteer.php" class="small-box-footer">View  Content <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        
      </div>
      <!-- /.row -->



      	<div class="col-md-12">
         	<div class="box">
            	<div class="box-header with-border">
             		 <h3 class="text-center">All Pages Content</h3>
            	</div>
            <!-- /.box-header -->
            <div class="box-body">
             	<table class="table table-bordered">
                	<tr>
                  		<th style="width: 10px">#</th>
                  		<th>Name</th>
                  		<th>Year</th>
                  		<th>Company</th>
                  		<th>image</th>
                  		<th>Edit</th>
						          <th>Delete</th>
                
                     <?php
          					 $listTeams = Utils::viewVolunteer($pdo);
          						 echo $listTeams;
          			?>

          			</tr>
				</table>
            </div>
            <!-- /.box-body -->
            </div>
          	<!-- /.box -->
        </div>

       



</section>









<?php

include 'includes/footer.php';

?>