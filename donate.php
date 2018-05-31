<?php

$title = 'Donate';
include 'includes/header.php';


include 'includes/connection.php';

?>
<!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Donate</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-10">
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom">Interested in Donating?</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="" method="post">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name">Name <small style="color: red">*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                  <div class="form-group">
                    <label for="form_email">Email <small style="color: red">*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                 
                  <div class="form-group">
                    <label for="form_phone">Phone <small style="color: red">*</small></label>
                    <input id="form_phone" name="form_phone" class="form-control" type="number" placeholder="Enter Phone" required="">
                  </div>

                   <div class="form-group">
                    <label for="form_phone">Amount <small style="color: red">*</small></label>
                    <input id="form_amount" name="form_amount" class="form-control" type="number" placeholder="Enter Amount" required="">
                  </div>

                  <div class="form-group">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                  </div>
                </div>
              </div>

            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
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
          <div class="col-md-4 col-md-offset-1">
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
              <h4>Call Us</h4>
              <h6 class="text-gray">Phone: +2347036894919</h6>
            </div>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
              <h4>Email</h4>
              <h6 class="text-gray">info@enactus.org.ng</h6>
            </div>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
              <h4>Address</h4>
              <h6 class="text-gray">Unit 3, Grace Court Building,Beside Stillwater Garden Estate, Eleghusi bus-stop, Lekki Phase 1, Lagos. Nigeria</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
  


  <?php

include 'includes/footer.php';

?>