<?php

var_dump($_GET);
// URL will be:
// localhost:8888/signin.php
// Output: array(0) {}


var_dump($_POST);
// localhost:8888/signin.php
// Output:
// array(2) { ["username"] => string(4) "alex ["password"] => string(8) "password }


echo $_POST['username'], '<br>';
echo $_POST['password'];
// Output:
// alex
// password
