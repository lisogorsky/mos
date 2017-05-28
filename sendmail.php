<?php
	if ($_POST["g-recaptcha-response"]) {
		
		$message = "У Вас новый вопрос с сайта";
		//$to = "denis1234567@mail.ru";
		$to = "89269535164@mail.ru";
		$from = "mail@mosocenka.org";
		$subject = "У Вас новый вопрос с сайта";
		
		$name = $_POST["name"];
		$tel = $_POST["tel"];
		$email = $_POST["email"];
		$textarea = $_POST["textarea"];
		
		$message = '<br>'.'<br>'.'<b>'.'Имя: '.'</b>'.$name.'<br>'.'<b>'.'Телефон: '.'</b>'.$tel.'<br>'.'<b>'.'E-mail: '.'</b>'.$email.'<br>'.'<b>'.'Комментарии: '.'</b>'.$textarea;
		$message.= $text; 
		$subject = "=?utf-8?B?".base64_encode($subject)."?=";
		$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";
		if (mail ($to, $subject, $message, $headers)) {
			header("Location: /#thanks");
		}
	}
	else {
		header("Location: /#error");
	}
?>