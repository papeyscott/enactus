<!-- Footer -->
<footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Our Newsletter</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <?php echo $statusMsg; ?>
            <form class="newsletter-form" action="action.php" method="POST">
              <div class="input-group">
                <input type="text" name="fname" placeholder="Your Firstname" class="form-control input-lg font-16" data-height="45px"  style="height: 45px;"><br><br>
                <input type="text" name="lname" placeholder="Your Lastname" class="form-control input-lg font-16" data-height="45px"  style="height: 45px;"><br><br>
                <input type="text" name="email" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px"  style="height: 45px;"><br><br>
               
              </div>
               <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit" name="submit">Subscribe</button>
                </span>
            </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Other Activities</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="404.php">Master Class</a></li>
              <li><a href="404.php">Training</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Opening Hours</h5>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Fri :  </span>
                  <div class="value pull-right"> 9.00 am - 5.00 pm </div>
                </li>
                <li class="clearfix"> <span> Weekends :</span>
                  <div class="value pull-right"> Closed </div>
                </li>
                <li class="clearfix"> <span>Public Holidays : </span>
                  <div class="value pull-right"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-10">
        <div class="col-md-5">
          
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2016 ThemeMascot. All Rights Reserved</p>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>


</body>
</html>