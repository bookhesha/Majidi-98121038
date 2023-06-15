<?php

include './dao/PersonDao.php';

// general description
$title = 'Session 9 - Cleaning the code';
$date = 'date: 5/13/2023 - Saturday';
$owner = 'Milad Majidi';

// create an instance of dto
$dao = new PersonDao();

// create a defualt id var
$id = null;

// create a default limit var
$limit = null;

// check limit variable 
if (array_key_exists('limit', $_GET)){
    if ($_GET['limit'] != null) {
        $limit = $_GET['limit'];
    }
}

// check id variable
if (array_key_exists('id', $_GET)) {
    if ($_GET['id'] != null) {
        $id = $_GET['id'];
    }
}

require './views/index.view.php';