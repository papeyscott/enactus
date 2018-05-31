<?php

$title = 'Partnership Projects';
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
              <h3 class="title text-white">Our Special Projects Highlights</h3>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <header class="header">
   
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
          <nav id="menuzord" class="menuzord default bg-light">
            <ul class="menuzord-menu">
              
              <li><a href="projects.php">Project Showcase</a>
             
                
            </ul>
           
          </nav>
        </div>
      </div>
    </div>
  </header>
  
    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
          <div class="blog-posts" id="pagination_data">



         
       
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->


 <script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"partnershippagination.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script>  

<?php

include 'includes/footer.php';

?>