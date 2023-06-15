
<?php

include 'db_connection.php';

// general description
$title = 'Session 3 - PHP and Mysql';
$date = 'date: 3/22/2023 - Wednesday';
$owner = 'Milad Majidi';

// connect to db
$pdo = connectToDb();

require('index.view.php');