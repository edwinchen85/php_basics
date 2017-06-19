<?php

$names = ['alex', 'billy', 'dale'];

foreach ($names as $name) {
  echo $name, '<br>';

  break;  // break out of the loop
}


$users = [
  ['username' => 'alex'],
  ['username' => 'billy'],
  ['username' => 'dale'],
  ['username' => 'ashley'],
  ['username' => 'mabel'],
  ['username' => 'josh'],
];

$toFind = 'dale';
$result = null;

foreach ($users as $user) {
  if ($user['username'] === $toFind) {
    $result = $user;
    break;  // Found, no need to continue.
  }
}

var_dump($result);


$users = [
  ['username' => 'alex'],
  ['username' => 'billy'],
  ['username' => 'dale'],
  ['username' => 'ashley'],
  ['username' => 'mabel'],
  ['username' => 'josh'],
];

$toSkip = 'dale';

foreach ($users as $user) {
  if ($user['username'] === $toSkip) {
    continue;   // This ends here and jump to next iteration.
  }

  echo $user['username'], '<br>';
}


$users = [
  [
    'username' => 'alex',
    'likes' => ['cats', 'food'],
  ],
  [
    'username' => 'billy',
    'likes' => ['code', 'cats', 'food'],
  ],
  [
    'username' => 'dale',
    'likes' => ['code', 'cats', 'music'],
  ],
];

$toFind = 'code';
$found = null;

foreach ($users as $user) {
  foreach ($user['likes'] as $like) {
    if ($like === $toFind) {
      $found = $user;
      break 2;  // This break out from inner and outer foreach loop.
    }
  }
}

var_dump($found);
