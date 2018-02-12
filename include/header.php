 <?
 require_once('./functions.php'); 
 $menu = getMenu();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Московская Оценка</title>
 	<link rel="icon" href="favicon.ico" />
 	<link href="css/bootstrap.min.css" rel="stylesheet">
 	<link href="css/grayscale.css" rel="stylesheet">
 	<link href="css/animate.css" rel="stylesheet">
 	<link href="css/style.css" rel="stylesheet">
 	<script src="js/wow.min.js"></script>
 	<script>
 		wow = new WOW ({
 			mobile: false
 		})
 		wow.init();
 	</script>
 	<script src='https://www.google.com/recaptcha/api.js'></script>
 </head>
 <body>

 	<div class="menu-top">	<a name="top"></a>
 		<nav class="navbar navbar-default">
 			<div class="container">
 				<div class="navbar-header">
						<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button> -->			
						<div class="panel-group visible-xs-inline">  
							<div class="panel panel-default ">
								<div class="panel-heading ">
									<h4 class="panel-title">
										<a href="/">ГЛАВНАЯ</a>
									</h4>
								</div>
							</div>
						</div>
						
						<? foreach($menu as $menu_item): ?>
							<div class="panel-group visible-xs-inline">  
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="<?=$menu_item['menu_link']?>"><?=$menu_item['menu_name']?></a>
										</h4>
									</div>
								</div>
							</div>
						<? endforeach; ?>
						
					</div>	
					
					<div class="menuWrapper hidden-xs">
						<div class="collapse navbar-collapse section-table" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav section-row">
								<li><a href="/">ГЛАВНАЯ</a></li>
								<? foreach($menu as $menu_item): ?>
									<li><a href="<?=$menu_item['menu_link']?>"><?=$menu_item['menu_name']?></a></li>
								<? endforeach; ?>
								<!-- <li><p class="tel visible-md visible-lg">+7-926-953-51-64</p><a id="formPopUp">заказать звонок</a>
								</li> -->
							</ul>
						</div>
					</div>
					
				</div>
			</nav>
		</div>