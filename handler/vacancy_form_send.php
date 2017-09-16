<?php
header("Content-type: text/html; charset=utf-8");
require_once ("../vendor/autoload.php");

if(isset($_POST["checkout"]) && $_POST["checkout"]==""){
	$error = false;
	$files = array();
	$uploaddir = "dealer-forms/"; 
	$filePath = "";

	foreach($_FILES as $file){
		$uniq = uniqid();
		$ext = pathinfo($file["name"], PATHINFO_EXTENSION);
		$file_name = "date-" . date("d-m-Y-h-i-s") . "-id-" . $uniq . "." . $ext;
		if(move_uploaded_file($file["tmp_name"], "../downloaded-files/" . $uploaddir . $file_name)){
			$filePath = $_SERVER["HTTP_HOST"]."/wp-content/themes/winner-ua/downloaded-files/" . $uploaddir . $file_name;
		}
		else{
			$error = true;
		}
	}

	$data = $error ? array("error" => "Помилка завантаження файлу.") : "";


	$to = "biofitz2@gmail.com";
	//$to = "nd_team@winner.ua";
	$date = date("d.m.y");
	$time = date("H:i");
	$file_path = $filePath;
	$subject = "Заявка-резюме з сайту winner.ua";
	$message = "
			<html>
				<head>
					<title>".$subject."</title>
				</head>
				<body>
					<p>Дата: " . $date . "</p>
					<p>Час: " . $time . "</p>
					<p>Посилання на архів: <a href='" . $file_path . "'>завантажити</a></p>
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

    $emailObj->setFrom("w@w.w", "winner.ua");           
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
	echo "Not sent";
}