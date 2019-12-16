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
                            <th id="id"><h2>ID</h2></th>
                            <th id="username"><h2>Gebruiker</h2></th>
                            <th id="firstname"><h2>Voornaam</h2></th>
                            <th id="lastname"><h2>Achternaam</h2></th>
                            <th id="created_on"><h2>Aangemaakt op</h2></th>
                            <th id="last_edited"><h2>Bewerkt op</h2></th>
                            <th id="last_login"><h2>Laatste login</h2></th>
                            <th id="misc"></th>
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
                                <td id="id"><span><?=$user[0];?></span></td>
                                <td id="username"><span><?=$user[1];?></span></td>
                                <td id="firstname"><span><?=$user[2];?></span></td>
                                <td id="lastname"><span><?=$user[3];?></span></td>
                                <td id="created_on"><span><?=$user[4];?></span></td>
                                <td id="last_edited"><span><?=$user[5];?></span></td>
                                <td id="last_login"><span><?=$user[6];?></span></td>
                                <td id="misc"><a href=""><h2>:</h2></a></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>