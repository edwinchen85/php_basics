<?php

for ($x = 1; $x <= 10; $x++) {
  echo $x . '<br>';
}


$totalItems = 210;
$itemsPerPage = 25;

// floor() is round down, ceil() is round up.
$pageCount = ceil( $totalItems / $itemsPerPage );

if ($pageCount > 1) {

  for ($i = 1; $i <= $pageCount; $i++) {
    echo '<a href="?page=' . $i . '">' . $i . '</a> ';
  }

}


$names = ['alex', 'billy', 'dale'];

for ($i = 0; $i < count($names); $i++) {
  echo $names[$i], '<br>';
}
