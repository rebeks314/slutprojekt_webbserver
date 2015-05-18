<?php

define("DB_SERVER", "berzanappen.se");
define("DB_USER", "berzanap_djurkos");
define("DB_PASSWORD", "RebeckaAlbin");
define("DB_NAME", "berzanap_djurkos");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);


    $sql = "UPDATE omOss SET text='".$_POST["text"]."' WHERE id='".$_POST["id"]."'";

    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    header('location:omOss.php');