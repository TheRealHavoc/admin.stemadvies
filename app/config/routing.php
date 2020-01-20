<?php

    $url = array_slice(explode("/", $_SERVER['REQUEST_URI']), 1);

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

            case "partijen":

                if (@$url[1] === "add") {

                    $requested_page = '../app/views/pages/parties/add.php';
                    $page_title = 'Partij toevoegen';
                    break;

                } else if (@$url[1] === "edit") {

                    $pointer = @$url[2];

                    $requested_page = '../app/views/pages/parties/edit.php';
                    $page_title = 'Partij bewerken';
                    break;

                } else if (@$url[1] === "delete") {

                    $pointer = @$url[2];

                    $requested_page = '../app/views/pages/parties/delete.php';
                    $page_title = 'Partij verwijderen';
                    break;

                } else if (ctype_digit(@$url[1])) {

                    $pointer = @$url[1];

                    $requested_page = '../app/views/pages/parties/view.php';
                    $page_title = 'Partij overzicht';
                    break;

                }

                break;

            case "accounts":

                if (@$url[1] === "add") {

                    $requested_page = '../app/views/pages/accounts/add.php';
                    $page_title = 'Account toevoegen';
                    break;

                } else if (@$url[1] === "edit") {

                    $pointer = @$url[2];

                    $requested_page = '../app/views/pages/accounts/edit.php';
                    $page_title = 'Account bewerken';
                    break;

                } else if (@$url[1] === "delete") {

                    $pointer = @$url[2];

                    $requested_page = '../app/views/pages/accounts/delete.php';
                    $page_title = 'Account verwijderen';
                    break;

                }

                $requested_page = '../app/views/pages/accounts/accounts.php';
                $page_title = 'Accounts';
                break;

            case "stellingen":

                if (@$url[1] === "add") {

                    $requested_page = '../app/views/pages/statements/add.php';
                    $page_title = 'Stelling toevoegen';
                    break;

                } else if (@$url[1] === "edit") {

                    $pointer = @$url[2];

                    $requested_page = '../app/views/pages/statements/edit.php';
                    $page_title = 'Stelling bewerken';
                    break;

                } else if (@$url[1] === "delete") {

                    $pointer = @$url[2];

                    $requested_page = '../app/views/pages/statements/delete.php';
                    $page_title = 'Stelling verwijderen';
                    break;

                }

                $requested_page = '../app/views/pages/statements/statements.php';
                $page_title = 'Stellingen';
                break;
            
            case "":
                $requested_page = '../app/views/pages/parties/parties.php';
                $page_title = 'Partijen';
                break;
    
            default:
                $requested_page = '../app/views/pages/404.php';
                $page_title = ':/';
                break;
    
        }

    }

?>