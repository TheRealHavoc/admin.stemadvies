<?php 

    include '../app/views/sections/header.php'; 
    include '../app/models/objects/account.php';

    $account = new Account($db);

    if (isset($_POST['add'])) {

        $account->username = htmlspecialchars($_POST["username"]);
        $account->firstname = htmlspecialchars($_POST["firstname"]);
        $account->lastname = htmlspecialchars($_POST["lastname"]);
        $account->password = htmlspecialchars(password_hash($_POST["password"], PASSWORD_DEFAULT));

        if (!$account->getSingle()) {

            if ($account->add()) header("location:/accounts");

        }

    }

?>

<main>
    <div class="wrapper">
        <div class="head main-head">
            <div class="row">
                <div class="col">
                    <h1><?=$page_title?></h1>
                </div>
            </div>
        </div>
        <div class="body">

        <form class="basic-form" action="" method="POST">
            <div class="wrapper">
                <div class="body">

                    <div class="input">
                        <label for="firstname"><span>Voornaam</span></label>
                        <input type="text" name="firstname" placeholder="Jack">
                        <div class="line focus"></div>
                    </div>

                    <div class="input">
                        <label for="lastname"><span>Achternaam</span></label>
                        <input type="text" name="lastname" placeholder="Danger">
                        <div class="line focus"></div>
                    </div>

                    <div class="input">
                        <label for="username"><span>Gebruikersnaam</span></label>
                        <input type="text" name="username" placeholder="Noobmaster69">
                        <div class="line focus"></div>
                    </div>

                    <div class="input">
                        <label for="password"><span>Password</span></label>
                        <input type="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                        <div class="line focus"></div>
                    </div>

                    <div class="row">
                        <input type="submit" name="add" value="<?=$page_title?>">
                    </div>

                </div>
            </div>
        </form>

        </div>
    </div>
</main>