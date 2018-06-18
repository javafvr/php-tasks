<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<ol>
		<?php
			$books = array("451° по Фаренгейту", "Шантарам", "1984", "Мастер и Маргарита", "Три товарища", "Портрет Дориана Грея", "Вино из одуванчиков", "Цветы для Элджернона", "Над пропастью во ржи", "Маленький принц", "Анна Каренина", "Сто лет одиночества", "Тень горы", "Атлант расправил плечи");
			
			$sizeOfArray = count($books);

			for ($i=0; $i < $sizeOfArray; $i++) { 
				echo "<li>$books[$i]";
			}
		?>
	</ol>
</body>
</html>