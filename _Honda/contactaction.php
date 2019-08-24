<?php
/* Redirect to a different page in the current directory that was requested */
require_once ('libs/PHPMailer/PHPMailerAutoload.php');

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
 
$extra = ($_GET['lang'] == "en")? 'index.php' : 'ar-index.php';

if( !empty($_POST['comment']) && ( strlen($_POST['comment']) > 10 ) ){

	if(!empty($_POST['category'])){
		$category = "Automobile";
		switch($_POST['category']){
			case 1:
				$category = "Automobile";
				break;
			case 2:
				$category = "Motorcycle";
				break;
			case 3:
				$category = "Marine";
				break;
			case 4:
				$category = "Power Products";
				break;
			default:
				$category = "Automobile";
		}
	}else{
		setcookie("Error", '4',time()+15); // Category Empty
		header("Location: http://$host$uri/$extra");
	}

	if( empty($_POST['fullname']) ){
		setcookie("Error", '4',time()+15); // Full Name Empty
		header("Location: http://$host$uri/$extra");
	}
	
	if( empty($_POST['email']) ){
		setcookie("Error", '4',time()+15); // Email Empty
		header("Location: http://$host$uri/$extra");
	}
	
	if( empty($_POST['phone']) ){
		setcookie("Error", '4',time()+15); // Phone Empty
		header("Location: http://$host$uri/$extra");
	}
	
	$mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
	//From email address and name
	$mail->From = "info@honda.com";
	$mail->FromName = "Honda";

	//To address and name
	$mail->addAddress("sarahzaki03@gmail.com", "Sarah Zaki"); 
	
	//Send HTML or Plain Text email
	$mail->isHTML(true);
	$mail->Subject = $_POST['fullname'].' Ask For '.$category;
	$mail->Body = $_POST['comment'];
	$UserEmail = $_POST['email'];
	$userName = $_POST['fullname'];
	$Phone = $_POST['phone']; 
	 
    $mail->Body .= '<hr/><br/> User Name: '.$userName.'<br/> User Email: '.$UserEmail.'<br/> User Phone: '.$Phone;
    
    if(!$mail->send()) 
    { 
    	setcookie("Error", '3',time()+15); // Error in sending mail
    } 
    else 
    {
    	setcookie("Error", '2',time()+15); // Thank you
    }
    	  
} else {
	// Setting new cookie
	setcookie("Error", '1',time()+15); // No Message Written
}
header("Location: http://$host$uri/$extra");
 
?>