<?php 
session_start();
if(!$_SESSION['lng']){
	$_SESSION['lng']='eng';
}
$lng = $_SESSION['lng'];
if($lng === 'arm'){
	include('arm.php');
}
elseif($lng === 'eng'){
	include('eng.php');
}
 
?>
<div class="container1 clearfix">
<div class="row justify-content-between clearfix">
<div class="col-xs-12 col-md-3 col-sm-3 col-lg-6 align-self-center">
<div id="logo" >
<a href="index.php" class="standard-logo"><img class="divcenter" src="images/logo.png" alt="Prisma Logo"></a>
</div>
</div>
<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3  d-own d-sm-inline-flex align-self-center">
<div style="position:relative; left:10px">
<a href="#" class="social-icon inline-block si-small si-rounded si-dark si-mini si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-rounded si-dark si-mini si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-rounded si-dark si-mini si-instagram">
<i class="icon-instagram"></i>
<i class="icon-instagram"></i>
</a>
</div>
</div>
<div class="col-xs-12 col-md-3 col-sm-6 col-lg-3 d-sm-inline-flex align-self-center">
<p class="mob"><span> <?php echo mob;?>:  +374 95005011 | </span> <span>&nbsp; +374 95005218</span></p>
<p class="left"><?php echo Email;?>: info@prisma.am </p>
<!--<p style="margin-bottom:0; text-align:right">Mobile: +374 95005011 | Office: +374 10 749118 |<br/> Fax: +374 10 749148 |</p>-->
</div>


</div>
<div class="row justify-content-between clearfix" style="height: 38px;
    margin-top: -18px;">
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 align-self-center nomargin">
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
