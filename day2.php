<?php
// ----------------------------
// Day 2 - PHP Learning Content
// ----------------------------

echo "Day 2 Topics:<br><br>";

// 1. Numbers and Math Functions
echo "<strong>1. Numbers and Math Functions</strong><br>";
$a = 10;
$b = 3;
echo "a = $a, b = $b<br>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Power: " . pow($a, $b) . "<br>";
echo "Square root of a: " . sqrt($a) . "<br>";
echo "Max of a and b: " . max($a, $b) . "<br>";
echo "Min of a and b: " . min($a, $b) . "<br><br>";

// 2. String and String Functions
echo "<strong>2. String and String Functions</strong><br>";
$str = "Hello World";
echo "Original String: $str<br>";
echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reversed: " . strrev($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Replace: " . str_replace("World", "PHP", $str) . "<br><br>";

// 3. Arrays and Array Functions
echo "<strong>3. Arrays and Array Functions</strong><br>";
$fruits = ["apple", "banana", "cherry"];
echo "Array: " . implode(", ", $fruits) . "<br>";
echo "Count: " . count($fruits) . "<br>";
array_push($fruits, "orange");
echo "After Push: " . implode(", ", $fruits) . "<br>";
array_pop($fruits);
echo "After Pop: " . implode(", ", $fruits) . "<br>";
sort($fruits);
echo "Sorted: " . implode(", ", $fruits) . "<br><br>";

// 4. Conditions
echo "<strong>4. Conditions</strong><br>";

// if - else
$score = 75;
echo "Score = $score<br>";
if ($score >= 60) {
    echo "Result: Pass<br>";
} else {
    echo "Result: Fail<br>";
}

// if - elseif - else
$grade = 85;
echo "Grade = $grade<br>";
if ($grade >= 90) {
    echo "Excellent<br>";
} elseif ($grade >= 75) {
    echo "Very Good<br>";
} elseif ($grade >= 60) {
    echo "Good<br>";
} else {
    echo "Try Again<br>";
}

// switch
$day = "Monday";
echo "Day = $day<br>";
switch ($day) {
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!<br>";
        break;
    case "Monday":
        echo "Start of the week<br>";
        break;
    default:
        echo "Midweek day<br>";
}
?>
