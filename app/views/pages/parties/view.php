<?php 

    include '../app/views/sections/header.php'; 
    include '../app/models/objects/party.php';

    $party = new Party($db);

    $party->id = $pointer;

?>

<main>
    <div class="wrapper">
        <div class="head main-head">
            <div class="row">
                <div class="col">
                    <h1><?=$page_title?></h1>
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
                <div class="panel col">
                    f
                </div>
                <div class="panel col">
                    f
                </div>
            </div>                
        </div>
    </div>
</main>