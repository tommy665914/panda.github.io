<meta http-equiv='refresh' content='10; url=http://thecode.local/'> 
<meta charset="UTF-8" />





<?php
$name=$_POST["name"]; //собираем данные о переменных из формы
$email=$_POST["email"];  //собираем данные о переменных из формы
$mess=$_POST["mess"];  //собираем данные о переменных из формы
if (empty($name) || empty($mess))//проверяем не пустые ли обязательные поля
{
echo "<center>Ошибка, вы не ввели данные о Ф.И. , либо о номере контактного телефона! \r\n</center>"; //вывод сообщения об ошибке
echo '<meta http-equiv="refresh" content="4; url=http://site.ru/">';\ //включаем переадресацию на обратную страницу сайта с заявкой
   


$to = "mail@yandex.ru"; //почта на которую отсылают почту
$subject = "Тема письма";
$message = "\r\n $name , $email \r\n $mess "; // \r и \n для разделения строк(если требуется)
mail ($to,$subject,$message) or print 'Error <meta http-equiv="refresh" content="1; url=http://site.ru/">';
echo 'Ваше сообщение успешно отправлено';
echo '<meta http-equiv="refresh" content="3; url=http://site.ru/">';
exit;
?>