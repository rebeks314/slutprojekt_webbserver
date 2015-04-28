<?php

define("DB_SERVER", "berzanappen.se");
define("DB_USER", "berzanap_djurkos");
define("DB_PASSWORD", "RebeckaAlbin");
define("DB_NAME", "berzanap_djurkos");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$sql = "SELECT * FROM omOss";



$stmt = $dbh->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();



echo json_encode($data);
