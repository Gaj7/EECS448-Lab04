<?php
$q1_correct = 'a';
$q2_correct = 'a';
$q3_correct = 'a';
$q4_correct = 'a';
$q5_correct = 'a';

$q1_answer = $_POST["q1"];
$q2_answer = $_POST["q2"];
$q3_answer = $_POST["q3"];
$q4_answer = $_POST["q4"];
$q5_answer = $_POST["q5"];

echo "Question 1: question 1?<br>You answered: " . $q1_answer . "<br>Correct answer: " . $q1_correct . "<br>";
echo "<br>Question 2: question 2?<br>You answered: " . $q2_answer . "<br>Correct answer: " . $q2_correct . "<br>";
echo "<br>Question 3: question 3?<br>You answered: " . $q3_answer . "<br>Correct answer: " . $q3_correct . "<br>";
echo "<br>Question 4: question 4?<br>You answered: " . $q4_answer . "<br>Correct answer: " . $q4_correct . "<br>";
echo "<br>Question 5: question 5?<br>You answered: " . $q5_answer . "<br>Correct answer: " . $q5_correct . "<br>";

$num_correct = 0;
if($q1_answer == $q1_correct)
  $num_correct++;
if($q2_answer == $q2_correct)
  $num_correct++;
if($q3_answer == $q3_correct)
  $num_correct++;
if($q4_answer == $q4_correct)
  $num_correct++;
if($q5_answer == $q5_correct)
  $num_correct++;

echo "<br><br>You answered " . $num_correct . " out of 5 correctly. Your score is " . ($num_correct*20) . "%";
?>
