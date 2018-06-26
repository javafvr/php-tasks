<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php

$db = new PDO('mysql:host=localhost;dbname=filmoteka', 'root', '');
$sql = "SELECT * FROM films";
$result = $db->query($sql);

// echo "<h2>Вывод записей по одной </h2>";

// while($film = $result->fetch(PDO::FETCH_ASSOC)){
// 	echo "<h2> Фильм " . $film['title'] . "</h2>";
// 	echo "<pre>";
// 	print_r($film);
// 	echo "</pre>";
// }

// $films = $result->fetchALL(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result->fetchALL(PDO::FETCH_ASSOC));
// echo "</pre>";

// foreach ($films as $film) {
// 	echo "<h2> Фильм: " . $film['title'] . "</h2>";
// 	echo "<h2> Жанр: " . $film['genre'] . "</h2>";
// }

echo "<pre>";

$result->bindColumn('id', $id);
$result->bindColumn('title', $title);
$result->bindColumn('genre', $genre);
$result->bindColumn('year', $year);



while ($result->fetch(PDO::FETCH_ASSOC)) {
	echo "ID: {$id} <br>";
	echo "Название: {$title} <br>";
	echo "Жанр: {$genre} <br>";
	echo "Год: {$year} <br>";
	echo "<br><br>";
}

echo "</pre>";


?>
</body>
</html>