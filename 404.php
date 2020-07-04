<!DOCTYPE html>
<html>
	<head>
		<title>
			Опана > Shark Man channel 
		</title>
		<link rel="SHORTCUT ICON" href="favicon.png" type="image/png">
		<link rel="apple-touch-icon" href="/favicon.png"> 
		<link rel=stylesheet type="text/css" href="Style.css"></link>	
	</head>
	<body>
		<div id="mainBody">	
			<div id="head">
				<?php 
					include('block/head.php');
				?>			
				<div id="headMenu">
					<script src="block/menu.js"></script> 
				</div>
			</div>
			<div id="body">
				<div id="content">
				<?php
					$quotes[] = '<h3>Что ты наделал? Все сломалось!</h3>';
					$quotes[] = '<h3>Это не я! За меня мой брат программировал!</h3>';
					$quotes[] = '<h3>Тебе настолько нечем заняться?</h3>';
					$quotes[] = '<h3>Тут должна была быть новая серия.</h3>';
					$quotes[] = '<h3>Возьми с полки пирожок!</h3>';
					$quotes[] = '<h3>ДуДОС Incorporated!</h3>';
					$quotes[] = '<h3>Пришло время переустанавливать Windows!</h3>';
					$quotes[] = '<h3>Обернись!</h3>';
					$quotes[] = '<h3>Могло быть и хуже...</h3>';
					$quotes[] = '<h3>Халк ломать!</h3>';
					$quotes[] = '<h3>228 1337</h3>';
					$quotes[] = '<h3>Перезагрузи компьютер</h3>';
					$quotes[] = '<h3>Ты втираешь мне какую-то дичь!</h3>';
					srand ((double) microtime() * 1000000);
					$random_number = rand(0,count($quotes)-1);
					echo ($quotes[$random_number]);  
				?>
				
				<center><h1 style="font-size: 200px; margin: 0px; padding: 50px;" >404</h1></center>
				
				</div>
				<div id="rightWidgets">
					<?php 
						include('block/widgets.php');
					?>
				</div>
			</div>	
			<div id="clear"> </div>
			<div id="footer_b">
				<?php 
					include('block/footer.php');
				?>
			</div>
		</div>		
	</body>
</html>	