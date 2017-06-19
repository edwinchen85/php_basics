<?php

// URL: localhost:8888/?page=1

$page = 1;

if ( isset($_GET['page']) ) {
  $page = $_GET['page'];
}

echo $page;
// If URL:localhost:8888/, output is 1


// Ternary operator
$page = isset($_GET['page']) ? $_GET['page'] : 1;

echo $page;



// Check if you are running PHP 7
// phpinfo();
// Following only can run in PHP 7
$page = $_GET['page'] ?? 1;
// Notice isset() is not used here when we have ??


$balance = 0;
// Check if $balance is truthy or falsey
$availableBalance = $balance ?: 'zero';

echo 'Your available balance is ' . $availableBalance;
