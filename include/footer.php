<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<footer>  
	<p>Компания "Московская оценка"</p>
	<p class="small"><?= date("Y") ?> &copy; Все права защищены</p>
	<div id="scrollup"><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span></div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script src="js/validator.js"></script>

<div id="paranja" style="display: none;">
	<div id="window">
		<form name="feedback" action="/sendmail.php" method="post"> 
			<h4>Закажите бесплатную консультацию!</h4>
			<span class="glyphicon glyphicon-remove" onclick="jQuery('#window').fadeOut(1000); jQuery('#paranja').fadeOut(1000);"></span>
			<div class="form-group has-feedback">
				<input name="name" type="text" pattern="^[а-яА-ЯёЁ \s]+$" maxlength="25" data-minlength="2" class="form-control" placeholder="Ваше имя *" required>
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
			<div class="form-group has-feedback">
				<input name="tel" type="text" class="form_tel form-control" pattern='^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$' placeholder="Ваш телефон *" required>
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
			<div class="form-group has-feedback">
				<input name="email" type="email" maxlength="25" data-minlength="7" class="form-control" placeholder="Ваш e-mail">
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
			<div class="form-group">
				<textarea name="textarea" class="form-control" rows="3" placeholder="Ваше сообщение"></textarea>
			</div>
			<div class="form-group captcha">
				<div class="recaptcha-wrap">
					<div class="g-recaptcha" data-sitekey="6LdS1RYUAAAAAF_b1n_dQ07QMDKQlV7RurAzT8XT"></div>
				</div>
				<button type="submit">Отправить</button>
			</div>
		</form>
	</div>
</div>

<script>
	$('#formPopUp').click(function() { $('#paranja, #window').slideDown(555); })
	$('form[name="feedback"]').validator();	
	$('.form_tel').mask("+7 (999) 999-99-99");
</script>

<div id="thanks"><div>Спасибо за Ваше сообщение!<br>Мы свяжемся с Вами в самое ближайшее время!<span class="glyphicon glyphicon-remove" onclick="jQuery('#thanks').fadeOut(1000); window.location='/'"></span></div></div>

<div id="error"><div>Сожелеем, но Вы не прошли каптчу!<br>Пожалуйста, вернитесь к заполнению формы!<span class="glyphicon glyphicon-remove" onclick="jQuery('#error').fadeOut(1000); window.location='/'"></span></div></div>

<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>