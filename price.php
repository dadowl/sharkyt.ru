<!DOCTYPE html>
<html>
	<head>
		<title>
			Услуги > Shark Man channel 
		</title>
		<link rel="SHORTCUT ICON" href="favicon.png" type="image/png">
		<link rel="apple-touch-icon" href="/favicon.png"> 
		<link rel=stylesheet type="text/css" href="Style.css"></link>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	
//Set default open/close settings
$('.acc_container').hide(); //Hide/close all containers
$('.acc_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container
 
//On Click
$('.acc_trigger').click(function(){
	if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all .acc_trigger classes and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add .acc_trigger class to clicked trigger and slide down the immediate next container
	}
	return false; //Prevent the browser jump to the link anchor
});
 
});
</script>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="chained.js"></script> 
	</head>
	<body>
	<div id="head">
				<?php 
					include('block/head.php');
				?>			
				<div id="headMenu">
					<script src="block/menu.js"></script> 
				</div>
			</div>
		<div id="mainBody">	
			<div id="body">
				<div id="content">
				<p>Услуги</p>
				<div class="container"> 
					
					<h4 class="acc_trigger"><a href="#">Создание сайтов</a></h4> 
					<div class="acc_container"> 
					<div class="block"> 
					<br />Создание сайта-визитки - 999р  (<a href='http://forsage-nsk.com/'>Пример</a>)
					<br />Создание сайта (через WordPress) - 3999р 
					<br />Создание сайта (страницы + админ-панель) - 5999р 
					</div> 
					</div> 
					
					<h4 class="acc_trigger"><a href="#">Реклама на этом сайте</a></h4> 
					<div class="acc_container"> 
					<div class="block"> 
					<br />Неделя - 200р
					<br />Месяц - 400р
					<br />3 месяца - 600р
					<br />6 месяцев - 800р
					<br />12 месяцев - 1000р
					</div> 
					</div>
					
					<h4 class="acc_trigger"><a href="#">Реклама(closed)</a></h4> 
					<div class="acc_container"> 
					<div class="block"> 
					нет тут ничего
					<!-- <br />Лайк 50р.
<br />Лайк+комментарий 110p.
<br />Подписка на ваш канал на неделю 100р.
<br />Ссылка на ваш канал под  моим видео 120р.
<br />Реклама канала в начале видео 250р. (+ лайк в подарок)
<br />
<center><u>Я не рекламирую:</u></center>
<br />1. Видео, содержащее неконструктивную нецензурную лексику.
<br />2. Видео, противоречивое морали и правилам ютуба.
<br />3. Видео, оскорбляющие кого-либо.
<br />4. Видео, которое Вам не принадлежит или нарушает авторское право
<br />5. И прочее, на моё усмотрение... сначала смотрю видео, потом говорю буду ли его рекламить.
<br />
<br />Оплата при помощи Яндекс Деньги:41001859669337
<br />Писать сюда: bakartem110
<br />
<br />Помните, что количество переходов, просмотров и подписок зависит напрямую от Вас... от названия, превью (при возможности) и собственно предоставленного контента(его количества и качества). 
<br />Я не знаю сколько людей среагирует, подпишется или посмотрит Ваше видео...
<br />
<br /><strong>После оплаты реклама будет произведена в течении 24 часов.</strong> -->
					</div> 
					</div> 
					
	
				</div> 
				<br /><br /><br /><br /><br /><br /><a href="order.php">Сделать заказ</a> 
				
				</div>
				<div id="rightWidgets">
					<?php 
						include('block/widgets.php');
					?>
				</div>
			</div>	
		</div>		
			<div id="clear"> </div>
			<div id="footer_b">
				<?php 
					include('block/footer.php');
				?>
			</div>
			
	</body>
</html>	