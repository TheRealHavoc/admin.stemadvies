<?php

    session_start();

    include_once 'routing.php';
    include_once 'database.php';

    $db = new Database();
    $db = $db->getConnection();

?>