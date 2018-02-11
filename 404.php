<?php include ('header.php'); ?>

<h2>Вы зашли на несуществующую страницу</h2>

<p class="text-center">Сейчас произойдёт автоматическая переадресация на главную страницу нашего сайта</p>

<script>
	setTimeout(function(){window.location.href = "/";},5000)
</script>