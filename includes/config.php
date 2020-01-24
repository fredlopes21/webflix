<?php

// Turn on output buffering.
ob_start();

session_start();

date_default_timezone_set('America/New_York');

try {
  $con = new PDO('mysql:dbname=heroku_08f1b312e9fb135;host=us-cdbr-iron-east-05.cleardb.net', 'b0ebce749ed39a', '8f9167a9');
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
  exit('Connection failed: ' . $e->getMessage());
}
