window.onload = function() { // после загрузки страницы
	var scrollUp = document.getElementById('scrollup'); // найти элемент
	scrollUp.onmouseover = function() { // добавить прозрачность
		scrollUp.style.opacity=0.3;
		scrollUp.style.filter  = 'alpha(opacity=30)';
	};
	scrollUp.onmouseout = function() { //убрать прозрачность
		scrollUp.style.opacity = 0.5;
		scrollUp.style.filter  = 'alpha(opacity=50)';
	};
	scrollUp.onclick = function() { //обработка клика
		window.scrollTo(0,0);
	};
	window.onscroll = function () { // при скролле показывать и прятать блок
		if ( window.pageYOffset > 0 ) {
			scrollUp.style.display = 'block';
		} else {
			scrollUp.style.display = 'none';
		}
	};
};

$(document).ready(function() {
	
	var a = location.hash;
	if (a == "#thanks") {
		setTimeout(function() {
			$('#thanks').fadeOut(1000);
		},5000);
	}
	if (a == "#error") {
		setTimeout(function() {
			$('#error').fadeOut(1000);
		},5000);
		setTimeout(function() {
			$('#formPopUp').click();
		},6000);
	}
	
	$('.tab-menu .table-cell > a').on('click', function() { 
		var tab = $(this).attr('class'); 
		$('.tab-content.active').removeClass('active');
		$('section#'+tab).addClass('active');
	})
	
	$('#formPopUp').click(function() { $('#paranja, #window').slideDown(555); })
	$('form[name="feedback"]').validator();	
	$('.form_tel').mask("+7 (999) 999-99-99");
	
})