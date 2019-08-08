<?php
include('connect.php');

	while($row = $partners->fetch_assoc()){ 	
		echo '<div class="col-md-3">	
			<a href="partners.php">
					<img src="'.$row['img'].'" alt="partners">
			</a>
			</div>
		';	
	}

?>
<!--<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget owl-loaded owl-drag" data-margin="0" data-nav="false" data-loop="false" data-autoplay="3000" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="2" data-items-lg="2" data-items-xl="2">
					<div class="owl-stage-outer">	
						<div class="owl-stage">
							<div class="owl-item" style="width: 164px;">
							<a href="#">
							<img src="http://webex.am/prisma/images/partners/1.png" alt="partners">
							</a>
							</div>
							<div class="owl-item" style="width: 164px;">
							<a href="#">
							<img src="http://webex.am/prisma/images/partners/2.png" alt="partners">
							</a>
							</div>
							
							<div class="owl-nav" disabled>		
							</div>
							<div class="owl-dots" disabled>		
							</div>
						</div> 
					</div>
				</div> -->
		
			
				
