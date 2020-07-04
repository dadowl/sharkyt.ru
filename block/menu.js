var menu=new Array(); 
var link=new Array(); 

menu[0]="Главная"; 
link[0]="index.php"; 
menu[1]="Мой канал на YouTube"; 
link[1]="http://www.youtube.com/user/MuhtarArt"; 
menu[2]="Для съемки"; 
link[2]="video.php";   
menu[3]="Услуги"; 
link[3]="price.php";   
menu[4]="Сборки"; 
link[4]="sborki.php"; 
menu[5]="Стримы"; 
link[5]="streams.php"; 




document.write('<div style="text-align:left;padding:5px;text-decoration:none;" >'); 
for (var i=0; i<menu.length; i++){ 
document.write('<a href="'+link[i]+'">'+menu[i]+'</a> '); 
if (i+1<menu.length) document.write(' | '); 

} 
document.write('</div>');
