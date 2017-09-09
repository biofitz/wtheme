<?php
header("Content-type: text/html; charset=utf-8");
require_once ("../vendor/autoload.php");

if(isset($_POST["checkout"]) && $_POST["checkout"]==""){
	//$to = "biofitz2@gmail.com";
	$to = "feedback_form@winner.ua";
	$date = date("d.m.y");
	$time = date("H:i");
	
	$date_of_charity = strip_tags(trim($_POST["date_of_charity"]));
	$name_of_organization = strip_tags(trim($_POST["name_of_organization"]));
	$legal_form = strip_tags(trim($_POST["legal_form"]));
	$physical_adress = strip_tags(trim($_POST["physical_adress"]));
	$mail_adress = strip_tags(trim($_POST["mail_adress"]));
	$email = strip_tags(trim($_POST["email"]));
	$phone = strip_tags(trim($_POST["phone"]));
	$contact_person = strip_tags(trim($_POST["contact_person"]));
	$bank_name = strip_tags(trim($_POST["bank_name"]));
	$mfo = strip_tags(trim($_POST["mfo"]));
	$fecipient = strip_tags(trim($_POST["fecipient"]));
	$account_number_of_the_recipient = strip_tags(trim($_POST["account_number_of_the_recipient"]));
	$account_currency = strip_tags(trim($_POST["account_currency"]));
	$project_description = strip_tags(trim($_POST["project_description"]));
	$project_results = strip_tags(trim($_POST["project_results"]));
	$results_measuring_method = strip_tags(trim($_POST["results_measuring_method"]));
	$amount_of_financing = strip_tags(trim($_POST["amount_of_financing"]));
	$another_kind_of_help = strip_tags(trim($_POST["another_kind_of_help"]));
	
	$url = strip_tags(trim($_POST["url"]));
	$ref = strip_tags(trim($_POST['ref']));
	$utm_source = strip_tags(trim($_POST["utm_source"]));
	$utm_medium = strip_tags(trim($_POST["utm_medium"]));
	$utm_term = strip_tags(trim($_POST["utm_term"]));
	$utm_content = strip_tags(trim($_POST["utm_content"]));
	$utm_campaign = strip_tags(trim($_POST["utm_campaign"]));
	$subject = "Нове повідомлення з сайту winner.ua на тему 'Благодійність'";
	$message = "
			<html>
				<head>
					<title>".$subject."</title>
				</head>
				<body>
					<p>Дата: " . $date . "</p>
					<p>Час: " . $time . "</p>
					<p>Дата благодійного заходу: " . $date_of_charity . "</p>
					<p>Назва організації заявника: " . $name_of_organization . "</p>
					<p>Правова форма: " . $legal_form . "</p>
					<p>Фізична адреса: " . $physical_adress . "</p>
					<p>Поштова адреса: " . $mail_adress . "</p>
					<p>Адреса електронної пошти: " . $email . "</p>
					<p>Контактні телефони: " . $phone . "</p>
					<p>Контактна особа: " . $contact_person . "</p>
					<p>Назва банку: " . $bank_name . "</p>
					<p>МФО: " . $mfo . "</p>
					<p>Одержувач: " . $fecipient . "</p>
					<p>Номер рахунку одержувача: " . $account_number_of_the_recipient . "</p>
					<p>Валюта рахунку: " . $account_currency . "</p>
					<p>Опишіть свій проект чи інакше використання коштів: " . $project_description . "</p>
					<p>Які результати очікуються від фінансування?: " . $project_results . "</p>
					<p>Яким чином будуть вимірюватися результати?: " . $results_measuring_method . "</p>
					<p>Очікувана сума фінансування: " . $amount_of_financing . "</p>
					<p>Інший вид допомоги: " . $another_kind_of_help . "</p>
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