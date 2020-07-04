<!DOCTYPE html>
<html> 
	<head>
		<title>
			Сделать заказ > Shark Man channel 
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
				 <p>Связь со мной</p>
				 Привет! Здесь ты можешь отправить мне сообщение, которое я обязательно прочитаю.
				 
				 <br /><br />P.S. Сообщения плана : "Привет", "Как дела" будут игнорироватся.
				
				<?php 
function show_form() 
{ 
?> 
<form  method=post> 
<div> 
              <br /><strong>Имя</strong><br /> 
              <input type="text" name="name" size="40"> 
              <br /><strong>Контактный email</strong><br /> 
              <input type="text" name="email" size="40"> 
			  
			  <!-- <br /><strong>Услуга:</strong>
			  <select name="var2" size="1">
			    <option value="">---===Выберите===---</option>
				<optgroup label="Создание сайта"></optgroup>
				<option value="Создание сайта-визитки - 999р">Создание сайта-визитки - 999р</option>
				<option value="Создание сайта (через WordPress) - 3999р">Создание сайта (через WordPress) - 3999р </option>
				<option value="Создание сайта (страницы + админ-панель) - 5999р ">Создание сайта (страницы + админ-панель) - 5999р </option>
				<optgroup label="Реклама на этом сайте"></optgroup>
				<option value="Неделя - 500р">Неделя - 200р</option>
				<option value="Месяц - 1000р">Месяц - 400р</option>
				<option value="3 месяца - 2000р">3 месяца - 600р</option>
				<option value="6 месяцев - 4000р">6 месяцев - 800р</option>
				<option value="12 месяцев - 8000р">12 месяцев - 1000р</option>
			  </select> -->
				
			 
              <br /><strong>Сообщение</strong><br /> 
              <textarea rows="10" name="mess" cols="30"></textarea> 
              <br /><input type="submit" value="Отправить" name="submit"> 
</div> 
</form> 
<? 
} 
 
function complete_mail() { 
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30); 
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50);	
        $_POST['var2'] =  substr(htmlspecialchars(trim($_POST['var2'])), 0, 10000); 
		 $_POST['mess'] =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 10000); 
		// если не заполнено поле "Имя" - показываем ошибку 0 
        if (empty($_POST['name'])) 
             output_err(0); 
        // если неправильно заполнено поле email - показываем ошибку 1 
        if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['email'])) 
             output_err(1); 
        // если не заполнено поле "Сообщение" - показываем ошибку 2 
        if(empty($_POST['mess'])) 
             output_err(2); 
        // создаем наше сообщение 
        $mess = ' 
        Имя отправителя:'.$_POST['name'].' 
        Контактный email:'.$_POST['email'].' 
		Услуга:'.$_POST['var2'].'
        '.$_POST['mess']; 
        // $to - кому отправляем 
        $to = 'info@sharkyt.ru '; 
        // $from - от кого 
        $from='Заказчик'; 
        mail($to, $_POST['title'], $mess, "From:".$from); 
        echo '<br /><br /><strong>Заказ отправлен! Ожидайте ответа на mail</strong>'; 
} 
 
function output_err($num) 
{ 
    $err[0] = 'ОШИБКА! Не введено имя.'; 
    $err[1] = 'ОШИБКА! Неверно введен e-mail.';  
    echo '<p>'.$err[$num].'</p>'; 
    show_form(); 
    exit(); 
} 
 
if (!empty($_POST['submit'])) complete_mail(); 
else show_form(); 
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