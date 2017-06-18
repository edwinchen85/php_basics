<?php

$uploaded = true;
$uploaded = -5;

// Strict type comparison
if ($uploaded === true) {
  echo 'Uploaded';
}


$tablesAvailable = true;
$tablesAvailable = '1false';

// Type cast
var_dump((int) '1false');   // int(1)
var_dump((bool) '1false');   // bool(true)

if ($tablesAvailable === true) {
  echo 'Book a table';
}

$tablesAvailable = false;

// <> can replace !==
if ($tablesAvailable !== true) {
  echo 'No tables available';
}


$roomsRequested = 4;
$roomsAvailable = 3;

if ($roomsRequested >= $roomsAvailable) {
  echo 'Sorry, not enough room.';
}

if ($roomsAvailable <= $roomsRequested) {
  echo 'Sorry, not enough room.';
}


$maxRoomsAllowed = 5;
$roomsRequested = 4;
$roomsAvailable = 20;

if ( ($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed) ) {
  echo 'Please choose less rooms.';
} else {
  echo 'Your booking is complete.';
}
