<html lang="en">
<?php 
include("header_adminka.php");


?>
</head>
<style>

html, body {
  height: 100%;
  background-color:  #9E9E9E;
 
 color: Black;
}
</style>
<body>
<div class="container">

<?php
$tip=$_GET['prod'];
if($tip=='parts'){
$descr = null; 	
$descr_short = null;
$gintext = 0;
}
else{
	$descr= $_POST['descrlink']; 
	$descr_short= $_POST['descr_short'];
	$gintext= $_POST['gintext'];
}
$lng=$_GET['lng'];
$title= $_POST['title']; 
$qty= $_POST['qty']; 
$brand= $_POST['brand'];

//print_r($gintext);
//die("aaaaaaaaaaaaa");

include('../con1.php');

$chanaparh=array();
if(!isset($_POST['p'])){
$_POST['p']=0;
}
if($_POST['p']==1){
	$anun=$_FILES['fayl']['name'];
	$file_count = count($anun);
		//print_r($anun);


 for ($i=0; $i< $file_count; $i++){
$tmp=$_FILES['fayl']['tmp_name'][$i];
$type=$_FILES['fayl']['type'][$i];
$size=$_FILES['fayl']['size'][$i];
$size=round($size/1024);
$test=explode(".", $anun[$i]);
$filetype=end($test);
if (empty($filetype)){
	$chanaparh[$i]='../images/logo.png';
	
}
else{
	$chanaparh[$i]='../images/uploads/'.md5(rand(0,1000). rand(0,1000). rand(0,1000). rand(0,1000)).'.'.$filetype;
move_uploaded_file($tmp, $chanaparh[$i]);
}

 }


if($tip=='ing'){

		$sql="INSERT INTO ingredients_$lng (`id`,  `img`, `brand`, `title`, `descript`, `descr_short`, `price`, `qty_count`) VALUES (NULL, '$chanaparh[0]',  '$brand', '$title', '$descr', '$descr_short', '$gintext', '$qty')";
		}
else if($tip=='mix'){	
		
		$sql="INSERT INTO mixers_$lng (`id`,  `img`, `brand`, `title`, `descript`, `descr_short`,  `price`, `qty_count`) VALUES (NULL, '$chanaparh[0]',  '$brand', '$title', '$descr', '$descr_short', '$gintext', '$qty')";
		}		
else if($tip=='cups'){
	
		$sql="INSERT INTO cups_$lng  (`id`,  `img`, `brand`, `title`, `descript`, `descr_short`, `price`, `qty_count`) VALUES (NULL, '$chanaparh[0]',  '$brand', '$title', '$descr', '$descr_short',  '$gintext', '$qty')";
	   }
else if($tip=='vend'){	
	    $sql="INSERT INTO vend_used_$lng  (`id`,  `img`, `brand`, `title`, `descript`, `descr_short`, `price`, `qty_count`) VALUES (NULL, '$chanaparh[0]',  '$brand', '$title', '$descr', '$descr_short', '$gintext', '$qty')";
	
		}
else if($tip=='parts'){	
	    $sql="INSERT INTO parts_$lng  (`id`,  `img`, `brand`, `title`, `descript`, `descr_short`, `price`, `qty_count`) VALUES (NULL, '$chanaparh[0]',  '$brand', '$title', '$descr', '$descr_short', '$gintext', '$qty')";
	
		}
 
   if(mysqli_query($con, $sql)){
   	 
   	 echo "Հաջող Ավելացում․․․";
	 echo '<script> setTimeout(function(){window.location.href="./adm.php"},1000)</script>';
            }
		else{
    echo "error".mysqli_error($con);
		}


 
} 
?>
</div>
</body>
</html>