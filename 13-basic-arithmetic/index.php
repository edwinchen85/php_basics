<?php

$views = 0;

// Addition
$views = $views + 1;
$views = $views + 5.5;
$views = $views + '1';    // type cast
$views++;

echo $views


$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = ($completedLessons / $totalLessons) * 100;

$percentageComplete = number_format($percentageComplete);     // no decimal

$percentageComplete = number_format($percentageComplete, 2);    // 2 decimal place

echo "You've completed {$percentageComplete}% of this course!";


// Substraction
$balance = 500;
$cost = 25;
$cost--;

echo $balance = $balance - $cost;


$points = 0;
$points = $points + 10;
$points += 10;
$points -= 10;


$a = 10;
$b = 8;

echo $a % $b;   // remainder is 2


$rows = 10;

for ($row = 1; $row <= $rows; $row++) {

  if ($row % 2 === 0) {
    echo 'Even';
  } else {
    echo 'Odd';
  }

}


$a = 10;

// Power
echo $a ** 2;   // 10 x 10
