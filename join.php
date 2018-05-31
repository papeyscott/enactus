<?php

$title = 'Get Involved';
include 'includes/header.php';


include 'includes/connection.php';

?>


<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg2.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">Become a Volunteer</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Get Involved</a></li>
                <li><a href="#">Join us</a></li>
                <li class="active">Become a Volunteer</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">

        <?php 
                            $stmt = $pdo->prepare("SELECT * FROM volunteer ORDER BY RAND() LIMIT 4");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    ?>

            <div class="col-sm-6 col-md-6 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
                <div class="thumb"><img class="img-fullwidth" src="Admin/<?php echo $row['img_loc']; ?>" alt="" style="height: 300px; width: 400px;"></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#"><?php echo $row['name'];  ?></a></h4>
                  <p>Volunteer Since - <?php echo $row['year'];  ?></p>
                  <p class="mb-20">Company:- <?php echo $row['company'];  ?></p>
                 
                </div>
              </div>
            </div> 
 <?php } ?>  


</div>
            <div class="col-md-4">
              <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Become a Volunteer</h3>
              <form id="volunteer_apply_form" class="p-30 pb-15" name="job_apply_form" action="join-form.php" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_name">Name <small>*</small></label>
                      <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_email">Email <small>*</small></label>
                      <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">               
                  <div class="col-sm-12">
                    
                  </div>                

                </div>
                <div class="form-group">
                  <label for="form_message">Message <small>*</small></label>
                  <textarea id="form_message" name="form_message" class="form-control required" rows="3" placeholder="Your Message"></textarea>
                </div>
             
                <div class="form-group">
                  <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                </div>
              </form>
              <!-- Job Form Validation-->
              <script type="text/javascript">
                $("#volunteer_apply_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->



<?php

include 'includes/footer.php';

?>