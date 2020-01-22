<?php 

    include '../app/views/sections/header.php'; 
    include '../app/models/objects/party.php';
    include '../app/models/objects/statement.php';

    $party = new Party($db);
    $statement = new Statement($db);

    $party->id = $pointer;

    $st_res = $statement->getAll();
    $pa_res = $party->getSingle();

?>

<main>
    <div class="wrapper">
        <div class="head main-head">
            <div class="row">
                <div class="col">
                    <h1><?=$pa_res["name"]?></h1>
                </div>
                <div class="col">
                    <div class="misc_menu">
                        <a href="/partijen/edit/<?=$pointer;?>">
                            <h2>
                                <i class="far fa-edit"></i>
                            </h2>
                        </a>
                        <a href="/partijen/delete/<?=$pointer;?>">
                            <h2>
                                <i class="far fa-trash-alt"></i>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="body main-table">
            <div class="grid-2">
                <div class="col main">
                    <table>
                        <thead>
                            <tr>
                                <th id="id"><h2>ID</h2></th>
                                <th id="statement"><h2>Vraag</h2></th>
                                <th id="misc"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if ($st_res === false): ?>
                                <tr>
                                    <td colspan="8"><span>Something went wrong.</span></td>
                                </tr>
                            <?php else: ?>

                            <?php foreach ($st_res as $key): ?>
                                <tr>
                                    <td id="id"><span><?=$key[0];?></span></td>
                                    <td id="statement"><span><?=$key[1];?></span></td>
                                    <td class="answer_menu" id="answer">
                                    <form action="">
                                        <a href="/partijen/<?=$pointer;?>">
                                            <h2 class="st-answer st-yes" data-action="answer" data-type="yes">
                                                <i class="fas fa-check"></i>
                                            </h2>
                                        </a>
                                    </form>
                                    <a href="/partijen/<?=$pointer;?>" data-action="answer" data-type="no">
                                        <h2 class="st-answer st-no">
                                            <i class="fas fa-times"></i>
                                        </h2>
                                    </a>
                                    <a href="/partijen/<?=$pointer;?>" data-action="answer" data-type="none">
                                        <h2 class="st-answer st-none">
                                            <i class="fas fa-minus"></i>
                                        </h2>
                                    </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
                <div class="panel col">
                    <div class="list">
                        <div class="row">
                            <p>Naam</p>
                            <h1><?=$pa_res["name"]?></h1>
                        </div>
                        <div class="row">
                            <p>Voorzitter</p>
                            <h1><?=$pa_res["chairman"]?></h1>
                        </div>
                        <div class="row">
                            <p>Aangemaakt op</p>
                            <h1><?=$pa_res["created_on"]?></h1>
                        </div>
                        <div class="row">
                            <p>Bewerkt op</p>
                            <h1><?=$pa_res["last_edited"]?></h1>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</main>