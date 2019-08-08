<?php 
session_start();
include('connect.php');
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

$news = $mysqli->query("SELECT * FROM news_".$lng." ORDER BY  news_".$lng.".`date` DESC");
$partners = $mysqli->query("SELECT * FROM `parnters`");
$jobs = $mysqli->query("SELECT * FROM jobs_".$lng." ORDER BY jobs_".$lng.".`id` DESC");
$intern = $mysqli->query("SELECT * FROM intern_".$lng." ORDER BY intern_".$lng.".`id` DESC");
$s_news = $news->num_rows;
$s_jobs = $jobs->num_rows;
$s_intern = $intern->num_rows;

$s_jobs=0;
$s_intern = 0;
$s_news=0;
if($s_news>=3){	
	$img = $mysqli->query("SELECT * FROM  news_".$lng." INNER JOIN `news_img` WHERE news_".$lng.".`id` = `news_img`.`news_id`");
}
?>
<div class="container1 clearfix">
<div class="row justify-content-between clearfix">
<div class="col-xs-12 col-md-3 col-sm-3 col-lg-6 align-self-center">
<div id="logo" >
<a href="index" class="standard-logo"><img class="divcenter" src="images/logo.png" alt="Prisma Logo"></a>
</div>
</div>
<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3 d-sm-inline-flex d-own align-self-center">
<div class="min-flex" style="position:relative; left:10px">
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


<div id="header-wrap">
<div class="container clearfix">
<div id="primary-menu-trigger">
<i class="icon-reorder" style="display: block;font-size: 25px;"></i>
</div>
<div id="top-search">

<a href="#" id="top-search-trigger"><i class="icon-search3" ></i><i class="icon-line-cross"></i></a>
<form action="search" method="get">
<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
</form>
</div>
<nav id="primary-menu" class="dark">
<ul class="sf-js-enabled" style="touch-action: pan-y;padding: 120px 0;">
<li class="current"><a href="#" class="menu_cl" data-href="index" data-id="home"><div><?php echo Home;?></div></a></li>
<li><a href="#" class="menu_cl" data-href="index#content-about" data-id="abouts"><div><?php echo About;?></div></a>

</li>
<li class="sub-menu"><a href="#" class="menu_cl" data-href="index#content-service" data-id="services" ><div><?php echo Services;?> <i class="icon-angle-right"></i></div></a>
	<ul style="display: none;">
	<li><a   href="strategic.php" class="menu_cl" data-href="strategic"><div><?php echo Services1;?></div></a></li>
	<li><a  href="research.php" class="menu_cl" data-href="research"><div><?php echo Services2;?></div></a></li>
	<li><a   href="monitoring.php" class="menu_cl" data-href="monitoring"><div><?php echo Services3;?></div></a></li>
	<li><a   href="capacity.php" class="menu_cl" data-href="capacity"><div><?php echo Services4;?></div></a></li>
	</ul>
</li>
<li style="display: <?php echo $s_news>=3 ?  'block' : 'none'; ?>"><a href="#" class="menu_cl" data-href="index.php#new" data-id="news"><div><?php echo News;?></div></a>
	
</li>
<li style="display: <?php echo ($s_jobs>0  ||  $s_intern>0) ?  'block' : 'none'; ?>"><a href="#" class="menu_cl" data-href="index.php#career" data-id="careers"><div><?php echo Careers;?></div></a>
	
</li>
<li><a  href="#"  class="menu_cl" data-href="index#footer" data-id="contacts" ><div><?php echo Contact;?></div></a></li>
</ul>
<a  id="overlay-menu-close" class="d-none d-lg-block"><i class="icon-line-cross"></i></a>
</nav>

</div>
</div>