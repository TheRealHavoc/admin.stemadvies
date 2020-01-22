<?php 

    include '../app/models/objects/account.php';

    $account = new Account($db);

    $account->id = $pointer;

    $res = $account->getSingleById();

    if (isset($_POST['delete'])) {

        $account->id = $pointer;

        if ($account->delete()) header("location:/accounts");

    }

?>

<form class="basic-form centered" action="" method="POST">
    <div class="wrapper">
        <div class="head">
            <h1><?=$page_title?></h1>

            <?php if ($res === false): ?>
                <span>Kan de opgevraagde informatie niet vinden.</span>
            <?php else: ?>
                <span>Weet je zeker dat je dit account wilt verwijderen?</span>
            <?php endif; ?>

        </div>
        <div class="body">

            <div class="row">

                <?php if ($res !== false): ?>
                    <input type="hidden" name="id" value="<?=$pointer?>">
                    <input type="submit" name="delete" value="<?=$page_title?>">
                <?php endif; ?>

                <a href="javascript:history.back()"><span>Annuleren</span></a>
            </div>

        </div>
    </div>
</form>