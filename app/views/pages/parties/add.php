<?php 

    include '../app/views/sections/header.php'; 
    include '../app/models/objects/party.php';

    $party = new Party($db);

    if (isset($_POST['add'])) {

        $party->name = htmlspecialchars($_POST['name']);
        $party->chairman = htmlspecialchars($_POST['chairman']);

        $party->add();

    }

?>

<form class="centered" action="" method="POST">
    <div class="wrapper">
        <div class="head">
            <h1><?=$page_title?></h1>
        </div>
        <div class="body">

            <div class="input">
                <label for="username"><span>Naam</span></label>
                <input type="text" name="name" placeholder="Piraten Partij">
                <div class="line focus"></div>
            </div>

            <div class="input">
                <label for="password"><span>Voorzitter</span></label>
                <input type="text" name="chairman" placeholder="Ancilla Tilia">
                <div class="line focus"></div>
            </div>

            <div class="row">
                <input type="submit" name="add" value="<?=$page_title?>">
            </div>

        </div>
    </div>
</form>