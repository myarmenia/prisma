<?php
include('connect.php');
echo '
<div class="col-md-12">		
		
<div id="oc-images" class="owl-carousel image-carousel carousel-widget owl-loaded owl-drag with-carousel-dots" data-margin="20"  data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-lg="3" data-items-xl="3">
	<div class="owl-stage-outer">	
		<div class="owl-stage">
		';
	while($row = $img->fetch_assoc()){ 
		echo '<div class="owl-item">
		<div class="oc-item">				
				<div class="hov  bottommargin-sm not-animate " data-animate="fadeIn" data-delay="1s" >
				<div class="cl-flipbox animation_cubetilt direction_w valign_top" style="width:100%;">
				<div class="cl-flipbox-h easing_ease" style="-webkit-transition-duration:500ms;transition-duration:500ms;"><div class="cl-flipbox-hh"><div class="cl-flipbox-front" style="padding: 25%; background-color: rgba(221, 51, 51, 0.4); background-image: url(&quot;'.$row['front_img1'].'&quot;); height: 212px;"><div class="cl-flipbox-front-h"></div></div><div class="cl-flipbox-back" style="padding: 25%; background-color: rgba(73, 73, 58, 0.88); background-image: url(&quot;'.$row['front_img2'].'&quot;);"><div class="cl-flipbox-back-h"><a class="cl-btn" style="color:#ffffff;background-color:rgba(30,115,190,0.84);" href="news.php?n='.$row['id'].'" target="_blank"><span>'; echo read_more; echo '</span></a></div></div></div></div></div>
	      </div>
				</div>
		
		</div>
		';	
		
	}
 	
echo 	'
	
	<div class="owl-nav">		
	</div>
	<div class="owl-dots">		
	</div>
</div> 
</div>
	</div>
</div>
';
?>
		
			
				
