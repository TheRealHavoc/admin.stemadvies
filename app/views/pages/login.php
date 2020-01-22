<?php include '../app/models/auth.php'; ?>

<form class="basic-form centered" action="" method="POST">
    <div class="wrapper">
        <div class="head">
            <h1><?=$page_title?></h1>
        </div>
        <div class="body">

            <div class="input">
                <label for="username"><span>Gebruikersnaam</span></label>
                <input type="text" name="username" placeholder="noobmaster69">
                <div class="line focus"></div>
            </div>

            <div class="input">
                <label for="password"><span>Wachtwoord</span></label>
                <input type="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                <div class="line focus"></div>
            </div>

            <div class="row">
                <input type="submit" name="login" value="<?=$page_title?>">
            </div>

        </div>
    </div>
</form>