<?php 

    include '../app/views/sections/header.php'; 
    include '../app/models/objects/party.php';

    $party = new Party($db);

    if (isset($_POST['add'])) {

        $party->name = htmlspecialchars($_POST['name']);
        $party->chairman = htmlspecialchars($_POST['chairman']);

        $party->left = 100 - $_POST['leftright'];
        $party->right = $_POST['leftright'];

        $party->prog = 100 - $_POST['topbottom'];
        $party->cons = $_POST['topbottom'];

        if ($party->add()) header("location:/");

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
                        <label for="username"><span>Naam</span></label>
                        <input type="text" name="name" placeholder="Piraten Partij">
                        <div class="line focus"></div>
                    </div>

                    <div class="input">
                        <label for="chairman"><span>Voorzitter</span></label>
                        <input type="text" name="chairman" placeholder="Ancilla Tilia">
                        <div class="line focus"></div>
                    </div>

                    <div class="input">
                        <label class="spread" for="leftright"><span>Links</span><span>Rechts</span></label>
                        <input type="range" min="0" max="100" name="leftright">
                    </div>

                    <div class="input">
                        <label class="spread" for="topbottom"><span>Progressief</span><span>Conservatief</span></label>
                        <input type="range" min="0" max="100" name="topbottom">
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