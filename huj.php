<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/vendor/pizda.css">
</head>
<body>
	<!-- Создаём форму и указываем её обработчик и метод -->
	 <form action="post.php" method="post" name="form"> 
	 	<!-- Поле ввода имени --> 
	 	<input name="name" type="text" placeholder="Ваше имя" /> <br> 
	 	<!-- Поле ввода почты --> 
	 	<input name="email" type="text" placeholder="Ваша почта" /> <br> 
	 	<!-- Поле ввода для темы сообщения --> 
	 	<input size="30" name="header" type="text" placeholder="Тема" /> <br> 
	 	<!-- Текстовое поле для самого сообщения --> 
	 	<textarea cols="32" name="message" rows="5"> Текст сообщения </textarea> <br> 
	 	<!-- Кнопка с надписью «Отправить», которая запускает обработчик формы --> 
	 	<input type="submit" value="Отправить" /> </form>
</body>
</html>