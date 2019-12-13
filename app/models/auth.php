<?php

    if (isset($_POST['login'])) {
        $_SESSION['user']['id'] = 1;
        header("location: http://".$_SERVER['HTTP_HOST']);
    }

    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: http://".$_SERVER['HTTP_HOST']);
    }

?>