<?php

// URL: localhost:8888/index.php/?slug=learn-php
var_dump($_GET);
// Output:
// array(1) { ["slug"] => string(9) "learn-php" }


// URL: localhost:8888/index.php/?slug=learn-php&page=1
var_dump($_GET);
// Output:
// array(2) { ["slug"] => string(9) "learn-php" ["page"] => string(1) "1" }

echo $_GET['slug'];



// URL: localhost:8888/index.php/?search=learn%20php&page=1
// $page = 1;
// $searchTerm = 'learn php';
$page = $_GET['page'];
$searchTerm = $_GET['search'];
$pages = 10;

echo '<h3>Searching for: ' . $searchTerm . '</h3>';
echo '<p>You are on page ' . $page . '</p>';

for ($i = 1; $i <= $pages; $i++) {
  echo '<a href="?search=' . $searchTerm . '&page=' . $i . '">' . $i . '</a>';
}



if (isset($_GET['search'])) {
  $searhTerm = $_GET['search'];
  echo '<h3>Searching for: ' . $searchTerm . '</h3>';
}



