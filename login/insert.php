<?php
session_start();
if(!$_SESSION['lng']){
	$_SESSION['lng']='arm';
}
$lng = $_SESSION['lng'];
include('../connect.php');
$db=$_POST['db'];

$jobs = $mysqli->query("SELECT * FROM jobs_".$lng." ORDER BY jobs_".$lng.".`id` DESC");
$intern = $mysqli->query("SELECT * FROM intern_".$lng." ORDER BY intern_".$lng.".`id` DESC");
echo '$db='.$db .'lng-'.$lng ;
?>


