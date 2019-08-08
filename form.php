<?php 
$name =$_POST['name-form'];
$email =$_POST['email-form'];
$mess =$_POST['mess-form'];
//echo $name.'-aaa-'.$email.'aaa'.$mess;
require 'phpMailer/class/class.phpmailer.php';

/*$mail = new PHPMailer;
				    //$mail->IsSMTP();	 							//Sets Mailer to send message using SMTP
					$mail->SMTPDebug = 1;
					$mail->Host = "smtp.gmail.com";		//Sets the SMTP hosts of your Email hosting, this for Godaddy
					$mail->Port = 465;								//Sets the default SMTP server port
					$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
					$mail->Username = "dan.armine@gmail.com";					//Sets SMTP username
					$mail->Password = "30101981";					//Sets SMTP password
					$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
					$mail->SetFrom('info@webex.am','aaaaaaaaa');
					//$mail->From = $_POST["email"];					//Sets the From email address for the message
					//$mail->FromName = $_POST["name"];		 		//Sets the From name of the message
					$mail->AddAddress('armine@webex.am', 'Prisma-Career');		
*/
					$mail = new PHPMailer;				    
					$mail->SetFrom('info@prisma.am','Prisma Mailer');					
					$mail->AddAddress('armine@webex.am', 'Prisma-Career');		//Adds a "To" address
					$mail->WordWrap = 200;							//Sets word wrapping on the body of the message to a given number of characters
					$mail->IsHTML(true);							//Sets message type to HTML
					//$mail->AddAttachment($path);					//Adds an attachment from a path on the filesystem
					$mail->Subject = 'Quick Contact Prisma Web';				//Sets the Subject of the message
					$mail->Body = 	'Sender Name:' .$name. '<br/> Sender\'s EMAIL address: ' .$email. '<br/> Sender Message:' .$mess ;
				
					if (!$mail->send()) {
						
						echo "Mailer Error: " . $mail->ErrorInfo;
					} else {
						echo '<span style="color:red; margin: 0 3px 10px;display: block;">';  if($_SESSION['lng'] === 'eng' ){
																																echo 'Message sent! </span>';
																																} 
																																else {
																																	echo 'Նամակն ուղարկված է </span>';
																																}
						
					}
?>