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
			$books = array(
				"451° по Фаренгейту"=>"Рей Брэдбери", 
				"Шантарам"=>"Грегори Дэвид Робертс", 
				"1984"=>"Джордж Оруэлл", 
				"Мастер и Маргарита"=>"Михаил Афанасьевич Булгаков", 
				"Три товарища"=>"Эрих Мария Ремарк", 
				"Портрет Дориана Грея"=>"Оскар Уайльд", 
				"Вино из одуванчиков"=>"Рей Брэдбери", 
				"Цветы для Элджернона"=>"Даниел Киз", 
				"Над пропастью во ржи"=>"Джером Д. Сэлинджер", 
				"Маленький принц"=>"Антуан де Сент-Экзюпери", 
				"Анна Каренина"=>"Лев Толстой", 
				"Сто лет одиночества"=>"Габриэль Гарсиа Маркес", 
				"Тень горы"=>"Грегори Дэвид Робертс", 
				"Атлант расправил плечи"=>"Айн Рэнд");
			
			// $sizeOfArray = count($books);

			// for ($i=0; $i < $sizeOfArray; $i++) { 
			// 	echo "<li>$books[$i]";
			// }

			foreach ($books as $book => $autor) {
				echo "<li>$book ($autor)";
			}
		?>
	</ol>
</body>
</html>