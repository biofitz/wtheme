<?php
header("Content-type: text/html; charset=utf-8");
require_once ("../vendor/autoload.php");

if(isset($_POST["checkout"]) && $_POST["checkout"]==""){
	$to = "biofitz2@gmail.com";
	$date = date("d.m.y");
	$time = date("H:i");
	
	$second_name = strip_tags(trim($_POST["second_name"]));
	$first_name = strip_tags(trim($_POST["first_name"]));
	$email = strip_tags(trim($_POST["email"]));
	$phone = strip_tags(trim($_POST["phone"]));
	
	$img = strip_tags(trim($_POST["img"]));
	$brand = strip_tags(trim($_POST["brand"]));
	$model = strip_tags(trim($_POST["model"]));
	$vin = strip_tags(trim($_POST["vin"]));
	$id = strip_tags(trim($_POST["id"]));
	$price = strip_tags(trim($_POST["price"]));
	$release_year = strip_tags(trim($_POST["release_year"]));
	$chasis = strip_tags(trim($_POST["chasis"]));
	$color_id = strip_tags(trim($_POST["color_id"]));
	$color_name_en = strip_tags(trim($_POST["color_name_en"]));
	$dealer_city = strip_tags(trim($_POST["dealer_city"]));
	$dealer_code = strip_tags(trim($_POST["dealer_code"]));
	$dealer_name = strip_tags(trim($_POST["dealer_name"]));
	$dealer_url = strip_tags(trim($_POST["dealer_url"]));
	$displacement = strip_tags(trim($_POST["displacement"]));
	$fuel = strip_tags(trim($_POST["fuel"]));
	$gear_id = strip_tags(trim($_POST["gear_id"]));
	$gear_type_id = strip_tags(trim($_POST["gear_type_id"]));
	$gear_name = strip_tags(trim($_POST["gear_name"]));
	$market_type = strip_tags(trim($_POST["market_type"]));
	$power = strip_tags(trim($_POST["power"]));
	$version = strip_tags(trim($_POST["version"]));
	
	$subject = "Нове повідомлення з сайту winner.ua";
	$message = "
			<html>
				<head>
					<title>".$subject."</title>
				</head>
				<body>
					<p>Дата: " . $date . "</p>
					<p>Час: " . $time . "</p>
				
					<p>Прізвище: " . $second_name . "</p>
					<p>Ім'я: " . $first_name . "</p>
					<p>E-mail: " . $email . "</p>
					<p style='margin-bottom: 30px; border-bottom: 1px dashed #eeeeee;'>Телефон: " . $phone . "</p>
				
					<p>Замовлення:</p>
					<p><img src='" . $img . "' alt='' style='max-width: 400px; height: auto;' /></p>
					<p>Бренд: " . $brand . "</p>
					<p>Модель: " . $model . "</p>
					<p>VIN: " . $vin . "</p>
					<p>id: " . $id . "</p>
					<p>Ціна: " . $price . " грн</p>
					<p>Рік: " . $release_year . "</p>
					<p>Тип кузова: " . $chasis . "</p>
					<p>Колір id: " . $color_id . "</p>
					<p>Колір (англ): " . $color_name_en . "</p>
					<p>Місто розташування дилера: " . $dealer_city . "</p>
					<p>Код дилера: " . $dealer_code . "</p>
					<p>Назва дилера: " . $dealer_name . "</p>
					<p>Сайт дилера: " . $dealer_url . "</p>
					<p>Літраж: " . $displacement . "</p>
					<p>Тип палива: " . $fuel . "</p>
					<p>КПП id: " . $gear_id . "</p>
					<p>КПП (тип): " . $gear_type_id . "</p>
					<p>КПП (повна назва): " . $gear_name . "</p>
					<p>Market type: " . $market_type . "</p>
					<p>Потужність: " . $power . "</p>
					<p>Версія: " . $version . "</p>
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