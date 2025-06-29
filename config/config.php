<?php
    define("HOST", "localhost");
    define("DBNAME", "coffee-blend");
    define("USER", "root");
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);