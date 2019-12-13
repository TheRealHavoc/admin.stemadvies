<form class="centered" action="" method="POST">
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

            <div class="input">
                <label for="password"><span>Bevestig wachtwoord</span></label>
                <input type="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                <div class="line focus"></div>
            </div>

            <div class="row">
                <input type="submit" value="<?=$page_title?>">
                <a href="/"><span>Al een account?</span></a>
            </div>

        </div>
    </div>
</form>