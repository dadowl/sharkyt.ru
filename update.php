<html> 
	<head>
		<title>
			Shark Man channel 
		</title>
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
				<p>Редактирование</p>
				<?php 
					include('lock.php');
				?>
				<?php 	
				include('block/bd.php'); 
	
				if(isset($_POST['title']))
				{$title=$_POST['title'];
				if($title=='')
				{unset($title);}}
		
				if(isset($_POST['date']))
				{$date=$_POST['date'];
				if($date=='')
				{unset($date);}}
	
				if(isset($_POST['description']))
				{$description=$_POST['description'];
				if($description=='')
				{unset($description);}}
		
				if(isset($_POST['text']))
				{$text=$_POST['text'];
				if($text=='')
				{unset($text);}}
	
				if(isset($_POST['author']))
				{$author=$_POST['author'];
				if($author=='')
				{unset($author);}} 

				if(isset($_POST['meta_key']))
				{$meta_key=$_POST['meta_key'];
				if($meta_key=='')
				{unset($meta_key);}} 
				?>
				<?php 	
	
				if(isset($title) && isset($date) && isset($description) && isset($text) && isset($author) )
				{
				$result = mysql_query ("UPDATE articles SET title='$title', date='$date', description='$description', text='$text', author='$author', meta_key='$meta_key' WHERE id='$id' ");
				if($result=='true') {echo "Обновлено";}
				else {echo "Ошибка при обновлении";}
				}
				else {echo "Заполните поля";}
				?>
				
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