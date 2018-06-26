# Подключение к БД через PDO
```php
$db = new PDO('mysql:host=localhost;dbname=filmoteka', 'root', '');
$sql = "SELECT * FROM films";
$result = $db->query($sql);
```

# Первый способ вывода запроса
```php
while($film = $result->fetch(PDO::FETCH_ASSOC)){
	echo "<h2> Фильм: " . $film['title'] . "</h2>";
	echo "<h2> Жанр: " . $film['genre'] . "</h2>";
}
```
# Второй способ вывода запроса
```php
$films = $result->fetchALL(PDO::FETCH_ASSOC);
foreach ($films as $film) {
	echo "<h2> Фильм: " . $film['title'] . "</h2>";
	echo "<h2> Жанр: " . $film['genre'] . "</h2>";
}
```
# Третий способ вывода запроса
```php
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
```
# Прочее
```php
// Получает одну запись из БД и вносит ее в ассоциативный массив
$result->fetch(PDO::FETCH_ASSOC))

// Получает все записи из БД и вносит их в ассоциативный массив
$result->fetchALL(PDO::FETCH_ASSOC);


```
# Выборка с защитой от SQL иньекций - РУЧНОЙ режим
```php
$username = 'user';
$password = '123';

$username = $db->quote($username);
$username = strtr($username, array('_'=>'_','%'=>'\%'));

$password = $db->quote($password);
$password = strtr($password, array('_'=>'_','%'=>'\%'));

$sql = "SELECT * FROM users WHERE name = '{$username}' AND password = '{$password}' LIMIT 1";

$result = $db->query($sql);

echo "<h2>Выборка записи без защиты от SQL инъекции: </h2>";

if($result->rowCount()==1){
	$user = $result->fetch(PDO::FETCH_ASSOC);
	echo "Имя пользователя: {$user['name']} <br>";
	echo "Пароль пользователя: {$user['password']}";
}
```