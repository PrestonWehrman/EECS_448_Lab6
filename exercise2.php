<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1); 


$q1 = $_POST["q1"]; 
$q2 = $_POST["q2"]; 
$q3 = $_POST["q3"]; 
$q4 = $_POST["q4"]; 
$q5 = $_POST["q5"]; 
$correct = 0;

echo "<h1> WWII Trivia Answers:</h1>";

echo "1) What two countries were already involved in a military conflict before the beginning of World War II? <br>";
echo "You answered: " . $q1 . "<br>";
echo "The correct answer: Japan & China <br><br>";
if($q1 == "Japan & China"){
	$correct = $correct + 1;
}

echo "2) In which battle did the Axis powers lose about a quarter of their total troops on the Eastern Front? <br>";
echo "You answered: " . $q2 . "<br>";
echo "The correct answer: Battle of Stalingrad <br><br>";
if($q2 == "Battle of Stalingrad"){
	$correct = $correct + 1;
}

echo "3) What country lost the most lives in World War II? <br>";
echo "You answered: " . $q3 . "<br>";
echo "The correct answer: Soveit Union <br><br>";
if($q3 == "Soveit Union"){
	$correct = $correct + 1;
}

echo "4) What was the code name for the Battle of Normandy? <br>";
echo "You answered: " . $q4 . "<br>";
echo "The correct answer: Operation Overlord <br><br>";
if($q4 == "Operation Overlord"){
	$correct = $correct + 1;
}

echo "5) How many Japanese planes attacked Pearl Harbor on December 7, 1941 <br>";
echo "You answered: " . $q5 . "<br>";
echo "The correct answer: 353 <br><br>";
if($q5 == "353"){
	$correct = $correct + 1;
}

echo "You got " . $correct . " out of 5 correct (" . $correct*20 . "%)";



?>