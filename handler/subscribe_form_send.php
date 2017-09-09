<?php
header("Content-type: text/html; charset=utf-8");
require_once ("../vendor/autoload.php");

if(isset($_POST["checkout"]) && $_POST["checkout"]==""){
	$date = date("d.m.y");
	$time = date("H:i");
	$type = strip_tags(trim($_POST["type"]));
	$email = strip_tags(trim($_POST["email"]));
	$subject = "Нова підписка на новини з сайту winner.ua";
	$message = "
			<html>
				<head>
					<title>".$subject."</title>
				</head>
				<body>
					<p>Дата: " . $date . "</p>
					<p>Час: " . $time . "</p>
					<p>E-mail: " . $email . "</p>
				</body>
			</html>";

	$emailObj = new PHPMailer();
	
	switch ($type){
		case "main_page":
			$to = "winnernews_sub@winner.ua";
			break;
		case "ford_page":
			$to = "ford@winner.ua";
			break;
		case "volvo_page":
			$to = "volvo@winner.ua";
			break;
		case "jaguar_page":
			$to = "jaguar@winner.ua";
			break;
		case "land_rover_page":
			$to = "landrover@winner.ua";
			break;
		case "porsche_page":
			$to = "porsche@winner.ua";
			break;
		case "bentley_page":
			$to = "sales@bentley-kyiv.com";
			break;
		case "dealer_page":
			$to = "winnernews_sub@winner.ua";
			break;

		default:
			$to = "winnernews_sub@winner.ua";
	}


    $emailObj->isSMTP();                                     
    $emailObj->Host = "smtp.gmail.com";  
    $emailObj->SMTPAuth = true;                            
    $emailObj->Username = "winnermailer@gmail.com";  
    $emailObj->Password = "poweroverwhelming";                         
    $emailObj->SMTPSecure = "tls";                         
    $emailObj->Port = 587;                                
    $emailObj->CharSet = "UTF-8";

   // $emailObj->setFrom($email, "winner.ua"); 
    $emailObj->setFrom("w@w.w", "winner.ua"); 
    $emailObj->addAddress($to, ""); 
    $emailObj->isHTML(true); 

    $emailObj->Subject = $subject;
    $emailObj->Body = $message;

    if(!$emailObj->send()){
        echo "Mailer Error: " . $emailObj->ErrorInfo;
    } 
	else{
        echo "Subscribed";
    }
}

else{
	echo "Not subscribed";
}