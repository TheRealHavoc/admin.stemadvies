<?php

    include '../app/models/objects/user.php';

    if (isset($_POST['login'])) {

        $user = new User($db);

        $user->username = htmlspecialchars($_POST['username']);

        $res = $user->getSingle();

        if (empty($res)) {
            $error = "Er ging iets fout. Heb je de juiste gegevens ingevuld?";
        } else {

            if (!password_verify($_POST['password'], $res['password'])) {
                $error = "Er ging iets fout. Heb je de juiste gegevens ingevuld?";
            } else {

                $user->updateLastLogin();

                $_SESSION['user']['id'] = $res['id'];
                $_SESSION['user']['username'] = $res['username'];
                $_SESSION['user']['firstname'] = $res['firstname'];
                $_SESSION['user']['lastname'] = $res['lastname'];
                
                header("location: http://".$_SERVER['HTTP_HOST']);

            }

        }
    }

    if (isset($_POST['logout'])) {

        session_unset();

        session_destroy();
        
        header("location: http://".$_SERVER['HTTP_HOST']);

    }

?>