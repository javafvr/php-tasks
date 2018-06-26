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
// $sql = "SELECT * FROM films";
// $result = $db->query($sql);

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

// echo "<pre>";

// $result->bindColumn('id', $id);
// $result->bindColumn('title', $title);
// $result->bindColumn('genre', $genre);
// $result->bindColumn('year', $year);

// while ($result->fetch(PDO::FETCH_ASSOC)) {
// 	echo "ID: {$id} <br>";
// 	echo "Название: {$title} <br>";
// 	echo "Жанр: {$genre} <br>";
// 	echo "Год: {$year} <br>";
// 	echo "<br><br>";
// }

// echo "</pre>";


//1. Выборка без защиты от SQL инъекции

// $username = 'user';
// $password = '123';

// $sql = "SELECT * FROM users WHERE name = '{$username}' AND password = '{$password}' LIMIT 1";

// $result = $db->query($sql);

// echo "<h2>Выборка записи без защиты от SQL инъекции: </h2>";
// // print_r($result->fetch(PDO::FETCH_ASSOC));

// if($result->rowCount()==1){
// 	$user = $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользователя: {$user['name']} <br>";
// 	echo "Пароль пользователя: {$user['password']}";
// }

//2. Выборка с защитой от SQL иньекций - РУЧНОЙ режим

// $username = 'user';
// $password = '123';

// $username = $db->quote($username);
// $username = strtr($username, array('_'=>'_','%'=>'\%'));

// $password = $db->quote($password);
// $password = strtr($password, array('_'=>'_','%'=>'\%'));

// $sql = "SELECT * FROM users WHERE name = '{$username}' AND password = '{$password}' LIMIT 1";

// $result = $db->query($sql);

// echo "<h2>Выборка записи без защиты от SQL инъекции: </h2>";

// if($result->rowCount()==1){
// 	$user = $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользователя: {$user['name']} <br>";
// 	echo "Пароль пользователя: {$user['password']}";
// }

// //3. Выборка с защитой от SQL иньекций - АВТОМАТИЧЕСКИЙ режим
// $sql = "SELECT * FROM users WHERE name = :username AND password = :password LIMIT 1";

// $stmt = $db->prepare($sql);

// $username = 'user';
// $password = '123';

// $stmt->bindValue(':username', $username);
// $stmt->bindValue(':password', $password);
// $stmt->execute();

// // Сокращенная запись через массив
// // $stmt->execute(array(':username'=>$username, ':password' => $password));

// $stmt->bindColumn('name', $user);
// $stmt->bindColumn('password', $pass);

// echo "Имя пользователя: {$user} <br>";
// echo "Пароль пользователя: {$pass}";


//4. Выборка с защитой от SQL иньекций - АВТОМАТИЧЕСКИЙ режим через параметры
// $sql = "SELECT * FROM users WHERE name = ? AND password = ? LIMIT 1";
// $stmt = $db->prepare($sql);
// $username = 'user';
// $password = '123';

// $stmt->bindValue('1', $username);
// $stmt->bindValue('2', $password);
// $stmt->execute();

// // Сокращенная запись через массив
// // $stmt->execute(array($username, $password));

// $stmt->bindColumn('name', $user);
// $stmt->bindColumn('password', $pass);

// $stmt->fetch();

// echo "Имя пользователя: {$user} <br>";
// echo "Пароль пользователя: {$pass}";

//Защита от сross site scripting attack
//htmlentities($username);

// //5. Вставка данных

// $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
// $stmt = $db->prepare($sql);

// $username = "Flash999";
// $userpassword = "999";

// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':password', $userpassword);
// $stmt->execute();

// echo "<p>Вставлено строк: " . $stmt->rowCount() . "</p>";
// echo "<p>ID последней вставленной записи: " . $db->lastInsertID() . "</p>";


//6. Обновление данных
// $sql = "UPDATE users SET name = :name WHERE id = :id";

// $stmt = $db->prepare($sql);

// $username = "NewFlash";
// $id = '4';

// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':id', $id);
// $stmt->execute();

// echo "<p>Было изменено строк: " . $stmt->rowCount();

//7. Удаление данных
$sql = "DELETE FROM users WHERE name = :name";

$stmt = $db->prepare($sql);

$username = "NewFlash";

$stmt->bindValue(':name', $username);
$stmt->execute();

echo "<p>Было изменено строк: " . $stmt->rowCount();


?>
</body>
</html>