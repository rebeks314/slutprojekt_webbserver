<?php

define("DB_SERVER", "berzan.hemsida.eu");
define("DB_USER", "berzanhe_djurkos");
define("DB_PASSWORD", "RebeckaAlbin");
define("DB_NAME", "berzanhe_te12e_djurkostymer");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$data=$stat->fetchAll;

echo jsonencode($data);
