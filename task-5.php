<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<form class="send" action="task-5.php" method="post">
		<?php
			if (!empty($_POST)) {
				
				$message = "Вам пришло новое сообщение с сайта: \n" 
					. "Имя отправителя:" . $_POST['userName']. "\n"
					. "Email отправителя: " . $_POST['userEmail'] . "\n"
					. "Сообщение: " . $_POST['userMessage'] . "\n";
				
				$headers = "From: info@dolganovdn.ru";

				$resultSend = mail("inet72@gmail.com", "Сообщение с сайта", $message, $headers); 

				if ($resultSend) {
					echo "<div class='success'>Сообщение отправлено успешно!</div>";
				} else {
					echo "<div class='error'>Сообщение не было отправлено!</div>";
				}
			}
			
		?>
		<h1>Send message</h1>
		<input type="text" name="userName" placeholder="Введите имя" required="true">
		<input type="email" name="userEmail" placeholder="Введите email" required="true">
		<textarea type="textarea" name="userMessage" cols="20" rows="10" placeholder="Введите сообщение" required="true"></textarea>
		<button type="submit">Отправить сообщение</button>
	</form>

</body>
</html>