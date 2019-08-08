<?php
//session_start();
include '../../connect.php';

	$code=$_POST['code'];
	$img1=$_POST['front_img'];
	$img2=$_POST['back_img'];
	$title=$_POST['title'];		
	
	$sql = "INSERT INTO `news` (`id`,`title`, `text`) VALUES (NULL, '$title', '$code')"; 
			if ($mysqli->query($sql) === true){
				   $id=$mysqli->insert_id;
					    $sql_img = "INSERT INTO `news_img` (`id`,`news_id`,`front_img1`, `front_img2`) VALUES (NULL, '$id','$img1', '$img2')"; 
					if ($mysqli->query($sql_img) === true){
						
								echo '<span style="color:green">The application is accepted, we will contact you.</span>
								<script>
								setTimeout(function(){
									window.location.reload();
									
								},2000)
								</script>
								
								';
								
					}
			}
			else{
				echo '<span style="color:red">Someting went wrong. Please try again.</span>
				<script>
								setTimeout(function(){
									window.location.reload();
									
								},2000)
								</script>
				
				';
			}
			$mysqli->close();
	
?>
