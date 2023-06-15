
<?php

include './dao/PersonDao.php';

// general description
$title = 'Session 5 - Better Structure';
$date = 'date: 4/17/2023 - Monday';
$owner = 'Milad Majidi';

// create an instance of dto
$dao = new PersonDao();

// create a defualt id var
$id = null;

// create a default limit var
$limit = null;

// check limit variable 
if ($_GET['limit'] != null) {
    $limit = $_GET['limit'];
}

require('./views/index.view.php');