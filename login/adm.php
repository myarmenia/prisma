<?php
session_start();
if(!$_SESSION['lng']){
	$_SESSION['lng']='arm';
}
$lng = $_SESSION['lng'];
?>
<html>
<head>
<meta charset="utf-8">
<title>Admin Prisma</title>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="./edit/style.css">
	<link rel="stylesheet" href="./edit/bootstrap.css">
	<style>
	img{
		margin: 10px 15px;
	}
	button{
		cursor:pointer
	}
	body{
		    background: rgb(245, 245, 245);
	}
	.menu{
	display: flex;
    justify-content: space-between;
    flex-direction: row;
	}
	
	</style>
</head>
<body>
<section id="head-section" >
<div class="content-wrap admin" style="transform: none;"> 
<div class="container clearfix ">
<div class="menu">
<div class="align-self-center nomargin">
<button id="careers" class="btn btn-warning">Careers</button>
<button id="new" class="btn btn-warning">News</button>
<button id="new" class="btn btn-warning">CV/See emails for Job</button>
</div>

<div>
<ul class="nav">
<li class="entry-categories mt-3 d-sm-inline-block">
<a id="arm" class="nav-link  <?php if($lng === 'arm'){ echo 'bg-dark ';}?> uppercase t500" href="#">Arm </a>
</li>
<li class="entry-categories mt-3 d-sm-inline-block " style="position: relative; left: auto;">
<a id="eng" class="nav-link <?php if ($lng === 'eng'){ echo 'bg-dark ';}?> uppercase t500" href="#">Eng</a>
</li>
</ul>
<div id="lng_set" ></div>
</div>
</div>
</div>
</div>
</section>
<section id="source-section" >
<div class="content-wrap source" style="transform: none;"> 
<div class="container clearfix">
<div id="menu-btn"></div>
<div id="current">


</div>
</div>
</div>
</section>
<script>
$(document).ready(function(){
		$(".nav-link").click(function (e) {
						e.preventDefault();
						var id_t = $(this).attr('id')
						$(this).addClass( "bg-dark" );
						$('.nav-link').each(function(){
								if(id_t != $(this).attr('id') ){
									$(this).removeClass( "bg-dark" );
										}
							})
								$.ajax({
										method: 'POST',
										url: 'set_lng.php',
										data: {data:id_t},								
										}).done(function (status) {
											$("#lng_set").html(status);
											
											});					
					});		
				
	$("#careers").click(function(){
		$("#menu-btn").html('<button id="jobs-btn" data-id="jobs" class="btn btn-secondary ">Jobs</button>'+
							'<button id="inter-btn"  data-id="intern"  class="btn btn-secondary ">Interships</button>')
		$("#jobs-btn, #inter-btn").on("click",function(){
			$.post("./insert.php",{db:$(this).attr("data-id")},function(arg){			
				$("#current").html(arg);			
			})
	
	//alert($(this).attr("data-id")) 
})
})


})

	



</script>


</body>
</html>




