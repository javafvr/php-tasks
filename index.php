<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php


require 'db.php';

// Создание новых записей

// $course = R::dispense('courses');
// $course->title = "Курс по React";
// $course->tuts = 10;
// $course->homeworks = 8;
// $course->level = 'для новичков';
// $course->price = 100;

// R::store($course);

//Получение всех записей

// $courses = R::find('courses');

// foreach ($courses as $course) {
// 	// print_r($course);
// 	echo "ID: " .$course->id . "<br>";
// 	echo "Название: " .$course->title . "<br>";
// 	echo "Количество уроков: " .$course->tuts . "<br>";
// 	echo "Уровень: " .$course->level . "<br>";
// 	echo "<hr>";
// }

//Обновление записи
$course = R::load('courses', 3);
// print_r($course);
echo "ID: " .$course->id . "<br>";
echo "Название: " .$course->title . "<br>";
echo "Количество уроков: " .$course->tuts . "<br>";
echo "Уровень: " .$course->level . "<br>";
echo "Студентов: " .$course->students . "<br>";
echo "Цена: " .$course->price . "<br>";
echo "<hr>";

$course->title = "React - ступень первая";
$course->tuts = 14;
$course->price = 80;
$course->students = 20;
$course->img = "<img src='sfdsd.jpg'>";

R::store($course);

// Удаление записи

// $course = R::load('courses',2);
// R::trash($course);

?>
</body>
</html>