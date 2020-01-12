<?php 

    include '../app/views/sections/header.php'; 
    include '../app/models/objects/party.php';

    $party = new Party($db);

    $res = $party->getAll();

?>

<main>
    <div class="wrapper">
        <div class="head main-head">
            <div class="row">
                <div class="col">
                    <h1><?=$page_title?></h1>
                </div>
                <div class="col">
                    <a href="/partijen/add"><button>+ Nieuw</button></a>
                </div>
            </div>
        </div>
        <div class="body main-table">
            <div>
                <table>
                    <thead>
                        <tr>
                            <th id="id"><h2>ID</h2></th>
                            <th id="name"><h2>Naam</h2></th>
                            <th id="chairman"><h2>Voorzitter</h2></th>
                            <th id="created_on"><h2>Aangemaakt op</h2></th>
                            <th id="last_edited"><h2>Bewerkt op</h2></th>
                            <th id="misc"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if ($res === false): ?>
                            <tr>
                                <td colspan="8"><span>Something went wrong.</span></td>
                            </tr>
                        <?php else: ?>

                        <?php foreach ($res as $key): ?>
                            <tr>
                                <td id="id"><span><?=$key[0];?></span></td>
                                <td id="name"><span><?=$key[1];?></span></td>
                                <td id="chairman"><span><?=$key[2];?></span></td>
                                <td id="lastname"><span><?=$key[3];?></span></td>
                                <td id="created_on"><span><?=$key[4];?></span></td>
                                <td id="misc">
                                    <a href="/partijen/edit/<?=$key[0];?>">
                                        <h2>
                                            <i class="far fa-edit"></i>
                                        </h2>
                                    </a>
                                    <a href="/partijen/delete/<?=$key[0];?>">
                                        <h2>
                                            <i class="far fa-trash-alt"></i>
                                        </h2>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>