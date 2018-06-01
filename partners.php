<?php

$title = "Partners";
include 'includes/header.php';
include 'includes/connection.php';


?>

<section>
	<div class="container">
		<div class="row">


        	
        	<!-- general sponsors list -->
			<div class="section-content">
	          	<div class="row multi-row-clearfix">
	          		<h4 class="text-center">All Sponsors and Partners</h4>


	          		 <?php 
                            $stmt = $pdo->prepare("SELECT * FROM partner");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    ?>

	          		<div class="col-xs-2">
			            <div class="team-member clearfix">
			                <div class="team-thumb">
			                  <img alt="" src="lock/<?php echo $row['img_loc']; ?>" class="img-fullwidth">
			                </div>
			               
			            </div>
			        </div>   &nbsp;


			         <?php } ?>

			      			        
				</div>
        	</div>
		</div>
	</div>
</section>





<?php

include 'includes/footer.php';

?>