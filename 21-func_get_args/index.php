<?php

function add($num1, $num2, $num3, $num4) {
  return $num1 + $num2 + $num3;
}

echo add(5, 10, 10);


$numbers = [5, 10, 10];

// Type hinting: array type
function add(array $numbers) {
  $total = 0;

  foreach ($numbers as $number) {
    $total += $number;
  }

  return $total;
}

// echo add(5);
// echo add([5, 10, 10, 1]);
echo add($numbers);



function add() {
  // var_dump(func_get_args);

  foreach (func_get_args() as $number) {
    // check if argument is not a number
    if (!is_numeric($number)) {
      continue;   // Jump to next iteration
    }

    $total += $number;
  }

  return $total;
}

echo add(5, 10, 10, '1alex');



function add() {
  return array_sum(func_get_args());
}

echo add(5, 10, 10, '1alex');
