<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'acade123');
define('DB', 'cadastroPDO');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';',USER,PASS);