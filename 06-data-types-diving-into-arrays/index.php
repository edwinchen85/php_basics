<?php

// Initialize empty array
$names = [];

// Initialize array with value
$names = array('alex', 'billy');
$names = ['alex', 'billy'];

$names[] 'dale';

echo $names[0];

var_dump($names);


// Associative array, key value pair
$people = [
  'alex' => 26,
  'billy' => 21
];

echo $people['alex'];    // 26
echo $people['billy'];   // 21

var_dump($people);


$users = [
  ['username' => 'alex'],
  ['username' => 'billy']
];

echo $users[0]['username'];
echo $users[1]['username'];

var_dump($users);


$users = [
  [
    'username' => 'alex',
    'email' => 'alex@codecourse.com',
    'likes' => ['cats', 'food']
  ],
  [
    'username' => 'billy',
    'email' => 'billy@codecourse.com'
    'likes' => ['books', 'cats']
  ]
];

echo $users[1]['email'];
echo $users[0]['likes'][0];   // cats

var_dump($users);

// Better way to output this
echo '<pre>' . var_dump($users) . '</pre>';


foreach ($users as $user) {
  // var_dump($user);
  echo $[user]['username'] . '<br>';
}


// How to add new item into the associative array
$users[] = [
  'username' => 'josh',
  'email' => 'josh@codecourse.com',
  'likes' => ['reading', 'cooking']
];

// How to modify a value inside the array
$users[1]['likes'][1] = 'dogs';

// Add another key into array
$users[1]['about'] = 'I am learning to code';

echo '<pre>', var_dump($users), '</pre>';
