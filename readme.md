# Шпаргалка по библиотеке REDBEAN

## Подключение библиотеки
```php

require 'libs/rb-mysql.php';

R::setup('mysql:host=localhost;dbname=school', 'root', '');

```
## Заблокировать создание новых полей (например на продакшене)
```php
R::freeze(true);
```

## Получение записей в переменную из таблицы "courses"
```php

$course = R::dispense('courses');

```
## Присвоение полю title нового значения
```php

$course->title = "Курс по React";

```
## Запись в таблицу, которая содержится в переменной $course новых значений полей
```php

R::store($course);

```
## Получение всех полей из таблицы "courses"
```php

$courses = R::find('courses');

```

## Получение записи из БД для ее дальнейшего изменения
```php

$course = R::load('courses', 3);

```
## Удаление записи содержащейся в переменной $course из БД
```php

R::trash($course);

```