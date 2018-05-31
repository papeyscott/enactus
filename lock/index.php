<?php ob_start();
session_start();
include 'sidebar.php';

?>

<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php include "../includes/counter.php";  ?></h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      
  
      <!-- Main row -->
      <div class="row">
        
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;height=600&amp;wkst=2&amp;hl=en_GB&amp;bgcolor=%23000066&amp;src=enactuswebnigeria%40gmail.com&amp;color=%231B887A&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%2328754E&amp;src=en.ng%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Africa%2FLagos" style="border:solid 1px #777" width="1000" height="600" frameborder="0" scrolling="no"></iframe>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include 'includes/footer.php';

?>