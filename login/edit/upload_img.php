<?php

if(!isset($_POST['p'])){
$_POST['p']=0;
}
if($_POST['p']==1){
	$anun=$_FILES['fayl']['name'];
	$file_count = count($anun);
	//print_r($anun);
	//die("sssssssssss");
 

 for ($i=0; $i<$file_count; $i++){
$tmp=$_FILES['fayl']['tmp_name'][$i];
$type=$_FILES['fayl']['type'][$i];
$size=$_FILES['fayl']['size'][$i];
$size=round($size/1024);
$test=explode(".", $anun[$i]);
$filetype=end($test);
if (empty($filetype)){
	
	$resp = array("error"=>true);
	//$ch = array();
//'<li><span style="color:red">Նկարը ընտրված չէ...</span></li>';
break;
}
else{
		$ch = array();
		$rand=md5(rand(0,1000));
	$chanaparh[$i]='../../images/uploads/'.$rand.'.'.$filetype;
	if($i === 0 ){
	$img1 =	'images/uploads/'.$rand.'.'.$filetype;
		}
	if($i === 1 ){
	$img2 =	'images/uploads/'.$rand.'.'.$filetype;
		}
	
	move_uploaded_file($tmp, $chanaparh[$i]);
	


	}
	$resp = array("error"=>false, "arr"=>$chanaparh, "img1"=>$img1,  "img2"=>$img2 );
 }

	
	echo json_encode($resp);

}
?>