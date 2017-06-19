<?php

while (false) {
  echo 'Will this run?';    // this won't run
}


$currentNumber = 1;
$endAt = 10;
$incrementBy = 1;

while ($currentNumber <= $endAt) {
  echo $currentNumber, '<br>';
  $currentNumber += $incrementBy;
}


$numberIwant = 3;

// rand(lower, upper) is random function
echo rand(1, 6);

while ( ($diceRoll = rand(1, 6)) !== $numberIwant ) {
  echo "You rolled a {$diceRoll}, we need a {$numberIwant}<br>";
}

echo "You rolled a {$numberIwant}!";


while (true) {
  // infinity loop
}


// Run at least once
do {
  echo 'This will be run at least once.';
} while (false);   // must put semicolon!
