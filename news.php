<html dir="ltr" lang="en-US">
<head>
<?php 
include('connect.php');
include('head.php');
$id=$_GET['n'];

?>
<style>#content.service h2, #content.service h4, #content.service p, #intern h4, #intern p {
    color: unset!important;
}
</style>
</head>
<body class="stretched overlay-menu">

<iframe src="prisma_anim.html" width="400" height="400" align="left" style="position: fixed;top: 52%;right: -77px;z-index: 140;"> </iframe>

<div id="wrapper" class="clearfix">
<header id="header-own" class="sticky-style-2">
<?php include('header1.php');
$img = $mysqli->query("SELECT * FROM  news_".$lng."  JOIN `news_img` ON news_".$lng.".`id` = `news_img`.`news_id` WHERE news_".$lng.".`id`= '$id'");
$row = $img->fetch_assoc()
?>
</header>
<section id="content" class="service">
	<div class="content-wrap" style="transform: none;padding-top:20px; background-color:#9E9E9E')">
	<div class="container clearfix" style="transform: none;">
	<div class="row clearfix">
	<div class="col-md-12">
	<h2> <?php echo $row['title']; ?></h2>
		<p> <?php echo $row['text']; ?></p>
	
	</div>
	</div>
	</div>
	</div>	
</section>	
<div id="gotoTop" class="icon-angle-up"></div>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
<script src="js/lng.js"></script>
</body>
</html>