<?php
$mysqli = new mysqli('localhost','prismaam_user','$Ah0545139','prismaam_db');
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
?>