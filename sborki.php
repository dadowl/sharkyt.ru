<!DOCTYPE html>
<html>
	<head>
		<title>
			Сборки > Shark Man channel 
		</title>
		<link rel="SHORTCUT ICON" href="favicon.png" type="image/png">
		<link rel="apple-touch-icon" href="/favicon.png"> 
		<link rel=stylesheet type="text/css" href="Style.css"></link>
		<meta name='keywords' content='сайт, ютуб, сайт о ютуб канале, канал на ютбе, услуги создания сайтов, создание сайтов, сайты, сайт создать, зайди на мой канал, подпишись '>
		<meta name='description' content='Привет, дорогой друг. Заходи на огонек!'>
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
				<p>Новости</p>
				<?php 
				include('block/bd.php'); 
				$result = mysql_query ("SELECT text FROM settings WHERE page='sborki'",$db);
				$myrow1 = mysql_fetch_array($result);
				echo $myrow1['text'];
				?>
				
				<?php 
				$result = mysql_query ("SELECT * FROM paks ");
				$myrow = mysql_fetch_array($result);
		
				do{
				printf('
				<hr />
				
				<div id="sborki">
				
				<strong><span>%s | Версия: %s </span></strong>
				<br /><span>Клиент - <a href="%s">cкачать</a></span>
				<br /><span>Сервер - <a href="%s">cкачать</a></span>
				<br /><span>От %s <span>
				
				</div>
				', $myrow['title'],$myrow['version'],$myrow['client'],$myrow['server'],$myrow['date']);
				}
				while ($myrow = mysql_fetch_array($result));
				
				
			
				?>
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