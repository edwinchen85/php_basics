<?php

// Single quote
$name = 'Alex';
// Double quote
$name = "Sally";

$integer = '7';
$float = '7.5';

// Use double quote when you use apostrophe in the string
$message = "It's a lovely day today";
// Or use escape key
$message = 'It\'s a lovely day today';
$message = "She said \"learning PHP is fun\"";

$message = $name . ' said "learning PHP is fun".';

// NG
echo "<a href=\"http://www.google.com\">Link</a>";
// Easier, readable
echo '<a href="https://www.google.com">Link></a>';
