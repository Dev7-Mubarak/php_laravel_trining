<?php
// ----------------------------
// Day 1 - PHP Learning Content
// ----------------------------

// STEP 1: Installation Steps
echo "Installation Steps:<br>";
echo "1. Go to https://www.apachefriends.org/index.html<br>";
echo "2. Download and install XAMPP<br>";
echo "3. After installation, open XAMPP Control Panel<br>";
echo "4. Start Apache server<br>";
echo "5. Go to htdocs folder inside XAMPP directory<br>";
echo "6. Create a PHP file (e.g., day1.php)<br>";
echo "7. Open http://localhost/day1.php in your browser<br><br>";

// STEP 2: Data Types and Variables
echo "PHP Data Types and Examples:<br>";

// String
$name = "My Name is Mubarak";
echo "String: $name<br>";

// Integer
$age = 25;
echo "Integer: $age<br>";

// Float
$height = 1.75;
echo "Float: $height<br>";

// Boolean
$isStudent = true;
echo "Boolean: " . ($isStudent ? "true" : "false") . "<br>";

// Array (List)
$colors = ["red", "blue", "green"];
echo "Array: ";
print_r($colors);

// Associative Array (Dictionary)
$person = ["name" => "Ali", "age" => 25];
echo "<br>" . "Associative Array: Name = " . $person["name"] . ", Age = " . $person["age"] . "<br>";

// Object
class Car {
    public $brand = "Toyota";
}
$myCar = new Car();
echo "Object: Brand = " . $myCar->brand . "<br>";

// NULL
$nothing = null;
echo "NULL: ";
var_dump($nothing);
echo "<br>";
?>
