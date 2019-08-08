<html lang="en">
<head>
<?php 
include("header_adminka.php");
?>
</head>
<style>
html,body {
  height: 100%;
  background-color:  #9E9E9E; 
  color: Black;
} 
ul{
	list-style-type: none;
    color: #2b982b;
    font-size: 19px;
	text-shadow:0px 1px #171716 
}
li{
	float:left;
}
.size{color: black;font-size:16px}
</style>
<?php
session_start();
include '../con1.php';

 if (!isset($_SESSION['login'])){ 
 $_SESSION['login']=false;
 echo '<span style="font-size:20px; color:white"> At first please login!</span>';
 echo '<script> setTimeout(function(){window.location.href="./adm.php"},1500)</script>';
 }
 
 else{
	$tip=$_GET['prod'];
	$lng=$_GET['lng'];
	$name=$_GET['name'];
	if($tip=='ing'){

		$miacum="SELECT  brand   from ingredients_$lng group by brand ";
		}
	else if($tip=='mix'){	
		$miacum="SELECT  brand  from  mixers_$lng group by brand ";
		}		
	else if($tip=='cups'){
		$miacum="SELECT  brand  from cups_$lng group by brand ";
		$sql="INSERT INTO   (`id`,  `img`, `brand`, `title`, `descript`, `descr_short`, `price`, `qty_count`) VALUES (NULL, '$chanaparh[0]',  '$brand', '$title', '$descr', '$descr_short',  '$gintext', '$qty')";
	   }
	else if($tip=='vend'){	
	    $miacum="SELECT  brand  from  vend_used_$lng  group by brand ";
	  
		}
	else if($tip=='parts'){	
	    $miacum="SELECT  brand  from  parts_$lng  group by brand ";
	  
		}
	
    $ardyunq=mysqli_query($con,$miacum);
 if($_SESSION['login']==true){
 echo'
<body><br>
 <div class="container">
 <button id="back" class="btn btn-success waves-effect"> Հետ գնալ</button>
 <h3> Լեզուն ';
 if($lng == 'am'){
	  echo 'Հայերեն է';
 }
 else if($lng == 'ru'){ echo 'Ռուսերեն է';}
 else if($lng == 'en'){ echo 'Անգլերեն է';}
 
 echo ' </h3> 
 <br><br>
<div class="row" >
<span style="font-size:22px; font-weight:bolder; color:white!important"> '. $name.' - Ապրանքի ավելացում<br>';

		   
echo ' </ul></span><br> <hr><br>
<form method="post" enctype="multipart/form-data" action="add_product.php?prod='.$tip.'&lng='.$lng.'">

<div>Նկարի չափ: (բարձր.800px X լայն.600px)</div> <br>

<input type="hidden" name="p" value="1" />
<div style="margin-right:12px;float:left;border: 2px solid white; padding:12px">Ընտրել նկարը<br>
<input type="file" name="fayl[]" required  /></div>
<br> 
<div style="padding-top:25px;clear:both">
 Ընթացիկ Բրենդերի անունններ՝
<ul>';

 while($row=mysqli_fetch_assoc($ardyunq)){ 
			echo   '<li>'.$row['brand'].'</li>
						<li> &nbsp;|&nbsp; </li>';
		   };
		   echo ' </ul>';
echo '<br>  
Բրենդերի անուն:<input name="brand" required/><br><br>
Ապրանքի Անուն:<input name="title" required/><br><br>
Քանակ:<input name="qty" required/><br><br>
<div  style="margin-right:12px;float:left;border: 2px solid white; padding:12px'; if($tip=='parts'){echo ';display:none';} echo '" >
Նկարագրություն:<br> <textarea id="myTextarea" name="descrlink" cols="47" rows="5" ></textarea>
<br></div>
<div  style="margin-right:12px;float:left;border: 2px solid white; padding:12px'; if($tip=='parts'){echo ';display:none';} echo '" >
Կարճ Նկարագրություն:<br> <textarea id="myTextarea1" name="descr_short" cols="47" rows="5" ></textarea>
<br></div>

Ապրանքի Գին:<input name="gintext" required/><br><br>

</div>


<button style="margin: 25px 300px;" id="btn" class="btn btn-success waves-effect"> Ավելացնել </button>
</form>

<div id="status"></div>
</div>

<br><br>';


 

}
else{
	echo '<span style="font-size:22px;font-weight:bold;color:white"> <br> At first please login!</span>';
	echo '<script> setTimeout(function(){window.location.href="./adm.php"},1500)</script>';
	}
}
?>

</div>

<script>
$(document).ready(function(){
	
$('input[name="ch_text"]').change(function(){
	var g=this
	if (g.checked){
		//alert(g.value)
		 document.getElementById("myTextarea").value=g.value;
		
	}
	else{//alert("hello")
	}
	
})
	
	
$('button#back').click(function(){
		window.location.href="./adm.php";
		})
	
	
	

})

</script>

</body>
</html>