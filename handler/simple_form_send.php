<?php
header("Content-type: text/html; charset=utf-8");
require_once ("../vendor/autoload.php");

if(isset($_POST["checkout"]) && $_POST["checkout"]==""){
	//$to = "biofitz2@gmail.com";
	$to = "feedback_form@winner.ua";
	$date = date("d.m.y");
	$time = date("H:i");
	$form_choose = strip_tags(trim($_POST["form_choose"]));
	$topic = strip_tags(trim($_POST["topic"]));
	$first_name = strip_tags(trim($_POST["first_name"]));
	$second_name = strip_tags(trim($_POST["second_name"]));
	$third_name = strip_tags(trim($_POST["third_name"]));
	$email = strip_tags(trim($_POST["email"]));
	$phone = strip_tags(trim($_POST["phone"]));
	$text_message = strip_tags(trim($_POST["message"]));
	$driver_license = strip_tags(trim($_POST["driver_license"]));
	$dealer = strip_tags(trim($_POST["dealer"]));
	$date_of_appeal = strip_tags(trim($_POST["date_of_appeal"]));
	$url = strip_tags(trim($_POST["url"]));
	$ref = strip_tags(trim($_POST['ref']));
	$utm_source = strip_tags(trim($_POST["utm_source"]));
	$utm_medium = strip_tags(trim($_POST["utm_medium"]));
	$utm_term = strip_tags(trim($_POST["utm_term"]));
	$utm_content = strip_tags(trim($_POST["utm_content"]));
	$utm_campaign = strip_tags(trim($_POST["utm_campaign"]));
	$subject = "Нове повідомлення з сайту winner.ua";
	$message = "
			<html>
				<head>
					<title>".$subject."</title>
				</head>
				<body>
					<p>Дата: " . $date . "</p>
					<p>Час: " . $time . "</p>
					<p>Тип звернення: " . $form_choose . "</p>
					<p>Тема звернення: " . $topic . "</p>
					<p>Ім'я: " . $first_name . "</p>
					<p>Прізвище: " . $second_name . "</p>
					<p>Ім'я по батькові: " . $third_name . "</p>
					<p>E-mail: " . $email . "</p>
					<p>Телефон: " . $phone . "</p>
					<p>Текст звернення: " . $text_message . "</p>
					<p>Номер водійських прав: " . $driver_license . "</p>
					<p>Дилер: " . $dealer . "</p>
					<p>Дата звернення до дилера: " . $date_of_appeal . "</p>
					<p>URL гостя: " . $url . "</p>
					
					<p>------------------------------------------------</p>
					<p>UTM-мітки:</p>
					<p>Джерело: " . $utm_source . "</p>
					<p>Канал: " . $utm_medium . "</p>
					<p>Ключове слово: " . $utm_term . "</p>
					<p>Зміст  оголошення: " . $utm_content . "</p>
					<p>Кампанія: " . $utm_campaign . "</p>
					<p>Реферал: " . $ref . "</p>
				</body>
			</html>";

	$emailObj = new PHPMailer();


    $emailObj->isSMTP();                                     
    $emailObj->Host = "smtp.gmail.com";  
    $emailObj->SMTPAuth = true;                            
    $emailObj->Username = "winnermailer@gmail.com";  
    $emailObj->Password = "poweroverwhelming";                         
    $emailObj->SMTPSecure = "tls";                         
    $emailObj->Port = 587;                                
    $emailObj->CharSet = "UTF-8";

    $emailObj->setFrom($email, "winner.ua"); 
    $emailObj->addAddress($to, ""); 
    $emailObj->isHTML(true); 

    $emailObj->Subject = $subject;
    $emailObj->Body = $message;

    if(!$emailObj->send()){
        echo "Mailer Error: " . $emailObj->ErrorInfo;
    } 
	else{
        echo "Sent";
    }
}

else{
	echo  "Not sent";
}