<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php

//Step 1

//----Peter
$Person1_name = 'Peter';
$Person1_speciality = 'Programmer';
$Person1_age = 25;

function person1_hello($name, $spec, $age){
	echo "Hello! My name $name. I am $spec and $age years old.";
}

person1_hello($Person1_name, $Person1_speciality, $Person1_age);

echo "<br><br>";

//----Jane
$Person2_name = 'Jane';
$Person2_speciality = 'Web-designer';
$Person2_age = 23;

function person2_hello($name, $spec, $age){
	echo "Hello! My name $name. I am $spec and $age years old.";
}

person2_hello($Person2_name, $Person2_speciality, $Person2_age);

//Step 2 Class

echo "<br><br>";

class Person{
	public $name;
	public $speciality;
	public $age;

}

$person1 = new Person;

$person1->name = "John Doe ";
$person1->speciality = " some spec ";
$person1->age = "-";

echo $person1->name;
echo $person1->speciality;
echo $person1->age;

//Step 3 function

echo "<br><br>";

class Person2{
	public $name;
	public $speciality;
	public $age;

	public function greeting()
	{
		// echo "Hello! My name $name. I am $spec and $age years old.";
		echo "Hello! My name " . $this->name . "I am " . $this->speciality . " and " . $this->age . "years old.";
	}
}

$person2 = new Person2;

$person2->name = "John Doe ";
$person2->speciality = " programmer ";
$person2->age = 25;

// $person2->greeting($person2->name,$person2->speciality,$person2->age);
$person2->greeting();

//Step 4 constructor

echo "<br><br>";

class Person3{
	public $name;
	public $speciality;
	public $age;

	public function __construct($name, $spec, $age)
	{
		// echo "constructor";
		$this->name = $name;
		$this->speciality = $spec;
		$this->age = $age;

	}

	public function greeting()
	{
		// echo "Hello! My name $name. I am $spec and $age years old.";
		echo "Hello! My name " . $this->name . " I am " . $this->speciality . " and " . $this->age . "years old.";
	}
}

$person3 = new Person3('Dmitriy','Junior web-developer', 36);

$person3->greeting();

?>
</body>
</html>