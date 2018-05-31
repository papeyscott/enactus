<?php

$title = 'University Program';
include 'includes/header.php';


include 'includes/connection.php';

//Message vars

$msg = "";
$msgClass = '';

//check for submit
if(filter_has_var(INPUT_POST, 'submit')){

  //Get form data

  $name = htmlspecialchars($_POST['form_name']);
  $email = htmlspecialchars($_POST['form_email']);
  $message = htmlspecialchars($_POST['form_message']);

  if (!empty($email) && !empty($name) && !empty($message)) {
    //passed
      //check email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      # failed

      $msg = 'Please enter a valid email';
      $msgClass = 'alert-danger';

    }else{
      //Passes
      $toEmail = 'info@enactus.org.ng';
      $subject = 'Request to Start a University Program From'. $name;
      $body = '<h2>Request From </h2>
          <h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Message</h4><p>'.$message.'</p>

      ';


      //Email Headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";


      //Additional headers

      $headers .= "From:" .$name. "<" .$email.">"."\r\n";

      if(mail($toEmail, $subject, $body, $headers)){
            //Email success message
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
      }else{
          //Email failure
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
      }

    }
  }else{
    //failed

    $msg = 'Please fill in All fields';
    $msgClass = 'alert-danger';
  }

}

?>

<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider fullscreen parallax layer-overlay overlay-dark-10" data-bg-img="images/bg/bg1.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                  <h3 class="text-center text-white widget-title">Interested in Starting a University Program?</h3>
                <div class="widget bg-lightest border-1px p-30">
                  <div class="widget border-5px p-30">
                  
                    <h5 class="widget-title line-bottom">Contact Us</h5>
                    <form id="quick_contact_form" name="quick_contact_form" class="quick-contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                      <?php if ($msg != ''): ?>
                      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                        
                      </div>
                    <?php endif; ?>
                      <div class="form-group">
                        <input name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" Value="<?php echo isset($_POST['form_name']) ? $name : ''; ?>">
                      </div>
                      <div class="form-group">
                        <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email" Value="<?php echo isset($_POST['form_email']) ? $name : ''; ?>">
                      </div>
                      <div class="form-group">
                        <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"><?php echo isset($_POST['form_message']) ? $name : ''; ?></textarea>
                      </div>
                      <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="btn btn-dark btn-theme-colored btn-sm mt-0" data-loading-text="Please wait...">Send Message</button>
                      </div>
                    </form>

                    <!-- Quick Contact Form Validation-->
                    <script type="text/javascript">
                      $("#quick_contact_form").validate({
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
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content --> <br>
<?php

include 'includes/footer.php';

?>