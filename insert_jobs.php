<?php
include('connect.php');
echo '
<div class="';
if($s_intern>0){echo 'col-md-6 ';}else{echo 'col-md-12 ';}
echo' own">		
		<h4 class="mb-2 ls1 uppercase t700" style="text-align: left;">'; echo Jobs; echo'</h4>
		<div class="line line-xs line-sports"></div>';
		if($s_intern>0){echo '<div id="oc-images" class="owl-carousel image-carousel carousel-widget owl-loaded owl-drag with-carousel-dots" data-margin="20"  data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="1" data-items-lg="1" data-items-xl="2">
';}else{echo '<div id="oc-images" class="owl-carousel image-carousel carousel-widget owl-loaded owl-drag with-carousel-dots" data-margin="20"  data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-lg="2" data-items-xl="3">
';}
	echo'<div class="owl-stage-outer">	
		<div class="owl-stage">
		';
	while($row = $jobs->fetch_assoc()){	
		echo '<div class="owl-item">
		<div class="oc-item">				
				<h5 id="profjobs-'.$row['id'].'"  class="font-body" style="margin-bottom:15px;">'.$row['title'].'</h5>
				<p>'.$row['descr'].'</p>
				<div style="margin: 0 2px 11px;">
				<a href="http://webex.am/prisma/cv/TF10357174.dot" download>
					 '; echo descr;	
			echo'</a></div>
				<button id="jobs-'.$row['id'].'" class="job button button-small button-3d ">';echo Apply; echo'</button>
				
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
		
			
				
