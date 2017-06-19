<?php

$names = ['alex', 'billy', 'dale'];

for ($i = 0; $i < count($names); $i++) {
  echo $names[$i], '<br>';
}


// Cleaner approach to loop arrays
foreach ($names as $name) {
  echo $name, '<br>';
}


foreach ($names as $index => $name) {
  echo $index, ': ', $name, '<br>';
}


$topics = [
  [
    'id' => 1,
    'title' => 'The best way to learn PHP',
    'posts' => [
      ['body' => 'Practice a lot!'],
      ['body' => 'Work on a project'],
    ]
  ],
  [
    'id' => 2,
    'title' => 'How do I use a foreach loop?',
    'posts' => [
      ['body' => 'Practice a lot!'],
    ]
  ],
];

foreach ($topics as $topic) {
  echo '<h1>' . $topic['title'] . '</h1>';
  foreach ($topic['posts'] as $post) {
    echo '<p>' . $post['body'] . '</p>';
  }
}
