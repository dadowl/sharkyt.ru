<!DOCTYPE html>
<html>
	<head>
		<title>
			Shark Man channel 
		</title>
		<link rel="SHORTCUT ICON" href="favicon.png" type="image/png">
		<link rel="apple-touch-icon" href="/favicon.png"> 
		<link rel=stylesheet type="text/css" href="Style.css"></link>
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
				<p>Стримы</p>
				Рад сообщить, что теперь ты можешь просмотреть мои стримы прямо на моем сайте!
				
				<br /><br />
				<center>
				<iframe frameborder='0' width='620' height='378' src='http://goodgame.ru/player.php?sharkmanyt'> </iframe>
				<iframe src="http://player.twitch.tv/?channel=sharkmanyt" frameborder="0" scrolling="no" height="378" width="620"></iframe>
				</center>
				
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