<?php

    $url = array_slice(explode("/", $_SERVER['REQUEST_URI']), -1);

    if (empty($_SESSION['user'])) {

        switch($url[0]) {
            case "":
                $requested_page = '../app/views/pages/login.php';
                $page_title = 'Inloggen';
                break;

            default:
                $requested_page = '../app/views/pages/404.php';
                $page_title = ':/';
                break;  
        }

    } else {

        switch($url[0]) {

            case "uitloggen":
                $requested_page = '../app/views/pages/logout.php';
                $page_title = 'Uitloggen';
                break;

            case "accounts":
                $requested_page = '../app/views/pages/accounts.php';
                $page_title = 'Accounts';
                break;

            case "stellingen":
                $requested_page = '../app/views/pages/statements.php';
                $page_title = 'Stellingen';
                break;
            
            case "":
                $requested_page = '../app/views/pages/parties.php';
                $page_title = 'Partijen';
                break;
    
            default:
                $requested_page = '../app/views/pages/404.php';
                $page_title = ':/';
                break;
    
        }

    }

?>