<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/media/logo.png" alt="Stemadvies" width="80px" height="auto">
                <h1>Stemadvies</h1>
            </div>
            <div class="col">
                <p>Ingelogd als: </p>
                <h2>
                    <?php echo $_SESSION['user']['firstname'] . " " . $_SESSION['user']['lastname'];?>
                </h2>
            </div>
        </div>
        <div class="row">
            <?php include '../app/views/sections/navigation.php'; ?>
        </div>
    </div>
</header>