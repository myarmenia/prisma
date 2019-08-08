<?php
include('connect.php');

require 'phpMailer/class/class.phpmailer.php';
	
	
$prof =$_POST['prof'];
$email =$_POST['email'];
$name =$_POST['name'];
$job_type =$_POST['job_type'];
$upload_file_status=false;


if(!isset($_POST['p'])){
$_POST['p']=0;
}
if($_POST['p']==1){
	$anun=$_FILES['fayl']['name']; 
	$tmp=$_FILES['fayl']['tmp_name'];
	$type=$_FILES['fayl']['type'];	
	$size=$_FILES['fayl']['size'];
	$size=round($size/1024);	
	$test=explode(".", $anun);
	$filetype=end($test);	
    $allowedExts = array("pdf","doc","rtf","docx","jpeg","jpeg 2000","jpg");    
    if( in_array($filetype, $allowedExts)) {
		$chanaparh='cv/'.md5(rand(0,1000)).'.'.$filetype;
		$upload_file_status=move_uploaded_file($tmp, $chanaparh);
    } else {
		$upload_file_status='wrong_upload_file_type';
        echo '<span style="color:red">Wrong document type...</span>'; 
    }
	
}
	if($upload_file_status && $upload_file_status !== 'wrong_upload_file_type'){
		if($job_type === 'job' || $job_type === 'intern'){			
			$sql = "INSERT INTO `cv` (`id`, `job_type`, `title`, `name`, `email`, `doc_cv`) VALUES (NULL, '$job_type', '$prof', '$name', '$email', '$chanaparh')"; 
			if ($mysqli->query($sql) === true){
				    
						echo '<span style="color:green">The application is accepted, we will contact you.</span>'; 
									
				
			}
			else{
				echo '<span style="color:red">Someting went wrong. Please try again.</span>';
			}
			$mysqli->close();
		}
		 
	}
	elseif($upload_file_status === 'wrong_upload_file_type'){
		
	}
	else{
		echo '<span style="color:red">Someting went wrong. Please try again.</span>'; 
	}
	
	
		$path='http://webex.am/prisma/'.$chanaparh;
	                $mail = new PHPMailer;
				    //$mail->IsSMTP();	 							//Sets Mailer to send message using SMTP
					$mail->SMTPDebug = 1;
					$mail->Host = "smtp.gmail.com";		//Sets the SMTP hosts of your Email hosting, this for Godaddy
					$mail->Port = 465;								//Sets the default SMTP server port
					$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
					$mail->Username = "dan.armine@gmail.com";					//Sets SMTP username
					$mail->Password = "30101981";				 	//Sets SMTP password
					$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
					$mail->SetFrom('info@webex.am','Prisma-Career');
					//$mail->From = $_POST["email"];					//Sets the From email address for the message
					//$mail->FromName = $_POST["name"];				//Sets the From name of the message
					$mail->AddAddress('armine@webex.am', 'Prisma-Career');		//Adds a "To" address
					$mail->WordWrap = 200;							//Sets word wrapping on the body of the message to a given number of characters
					$mail->IsHTML(true);							//Sets message type to HTML
					//$mail->AddAttachment($path);					//Adds an attachment from a path on the filesystem
					$mail->Subject = 'Prisma-Career-test';				//Sets the Subject of the message
					$mail->Body = 	'Prisma-Career-test- Download LINK - ' .$path ;
				//$message;
					//An HTML or plain text message body
					if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent! ";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}


?>