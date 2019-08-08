<?php
session_start();
if(!isset($_POST['data'])){
	$_SESSION['lng']='muk';
}
$_SESSION['lng'] = $_POST['data'];
//$lng = $_SESSION['lng'];
//echo $lng ;
echo '<script>window.location.reload(); </script>';


?>