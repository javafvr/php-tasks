<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		function greeting($name= "Гость", $dayOfWeek="1"){
			switch ($dayOfWeek) {
				case '1':
				case '2':
				case '3':
				case '4':
				case '5':
					echo "Привет $name! Хорошего и продуктивного рабочего дня!<br>";
					break;
				case '6':
				case '7':
					echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!<br>";
					break;
				default:
					echo "Введите день недели от 1 до 7<br>";
					break;
			}
		}

		greeting("Dmitrii", "1");
		greeting("Sergey", "4");
		greeting("Vladimir", "6");
		greeting("Maria", "7");
		greeting("Gennadii", "9");
	?>
</body>
</html>