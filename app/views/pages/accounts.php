<?php 

    include '../app/views/sections/header.php'; 
    include '../app/models/objects/account.php';

    $account = new Account($db);

    $res = $account->getAll();

?>

<main>
    <div class="wrapper">
        <div class="head main-head">
            <div class="row">
                <div class="col">
                    <h1><?=$page_title?></h1>
                </div>
                <div class="col">
                    <button>+ Nieuw</button>
                </div>
            </div>
        </div>
        <div class="body main-table">
            <div>
                <table>
                    <thead>
                        <tr>
                            <th><h2>ID</h2></th>
                            <th><h2>Gebruiker</h2></th>
                            <th><h2>Voornaam</h2></th>
                            <th><h2>Achternaam</h2></th>
                            <th><h2>Aangemaakt op</h2></th>
                            <th><h2>Bewerkt op</h2></th>
                            <th><h2>Laatste login</h2></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if ($res === false): ?>
                            <tr>
                                <td colspan="7"><span>Something went wrong.</span></td>
                            </tr>
                        <?php endif; ?>

                        <?php foreach ($res as $user): ?>
                            <tr>
                                <td><span><?=$user[0];?></span></td>
                                <td><span><?=$user[1];?></span></td>
                                <td><span><?=$user[2];?></span></td>
                                <td><span><?=$user[3];?></span></td>
                                <td><span><?=$user[4];?></span></td>
                                <td><span><?=$user[5];?></span></td>
                                <td><span><?=$user[6];?></span></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>