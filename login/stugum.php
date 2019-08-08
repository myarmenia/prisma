<?php
  session_start();  
$login=$_POST['login'];
$pass=$_POST['password'];
 if(($login=='P-admin')and($pass=='admin2020') ){	 
  $_SESSION['login']=true;   
 echo '<span style="font-size:20px;font-weight:bold;color:#2ecc71"> <br> Login success!</span>';
 echo '<script> setTimeout(function(){window.location.href="./adm.php"},700)</script>'; 
  }
  else {
  echo '<span style="font-size:20px;color:white"><br> Invalid login or password</span>'; 
  }
?>


