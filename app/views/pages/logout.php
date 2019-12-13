<?php include '../app/models/auth.php'; ?>

<form class="centered" action="" method="POST">
    <div class="wrapper">
        <div class="head">
            <h1><?=$page_title?></h1>
            <span>Weet je zeker dat je wilt uitloggen?</span>
        </div>
        <div class="body">

            <div class="row">
                <input type="submit" name="logout" value="<?=$page_title?>">
                <a href="javascript:history.back()"><span>Annuleren</span></a>
            </div>

        </div>
    </div>
</form>