<?php


							$connect = mysqli_connect("localhost", "enactuso_root", "Sife4words.", "enactuso_enactusweb");

							$record_per_page = 12;
							$page = '';
							$output = '';


							if(isset($_POST["page"]))
							{

								$page = $_POST["page"];
							}
							else
							{
								$page = 1;
							}
								$start_from =($page - 1) * $record_per_page;

								$query = "SELECT * FROM alumni ORDER BY alumni_id DESC LIMIT $start_from, $record_per_page";


								$result = mysqli_query($connect, $query);

								while ($row = mysqli_fetch_array($result)) {
							
							?>

							<div class="col-md-4">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="lock/<?php echo $row['img_loc']; ?>" alt="" class="img-responsive img-fullwidth" style="height: 200px; width: 350px;"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#"><?php echo $row['name'];  ?></a></h4>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10"><?php
                    $desc = $row['story'];
                  $strcut = substr($desc,0,210);
              $desc = substr($strcut,0,strrpos($strcut, ' ')).' <a href="alumni-single.php?sid='.$row[0].'" class="btn-read-more"><br> Read More</a>';
                        echo $desc;
                 
                 ?></p>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>

                <?php  } ?>

                <div class="col-md-12">
              <nav>
                <ul class="pagination theme-colored">
<?php	

		$page_query = "SELECT * FROM alumni ORDER BY alumni_id DESC";
		$page_result = mysqli_query($connect, $page_query);
		$total_records = mysqli_num_rows($page_result);
		$total_pages = ceil($total_records/$record_per_page);
		

		for ($i=1; $i <=$total_pages ; $i++) { 

			echo "<li><span class='pagination_link bg-theme-colored text-white' style='cursor:pointer; padding:10px; border:1px;' id='".$i."'>".$i."</span></li>";
		
		}
		?>
			</ul>
              </nav>
            </div>

					