<nav>
    <ul>
        <li>
            <a href="/">
                <h6>Partijen</h6>
                <div class="line hover"></div>
                <?php if ($page_title === "Partijen"): ?>
                    <div class="line active"></div>
                <?php endif; ?>
            </a>
        </li>
        <li>
            <a href="/stellingen">
                <h6>Stellingen</h6>
                <div class="line hover"></div>
                <?php if ($page_title === "Stellingen"): ?>
                    <div class="line active"></div>
                <?php endif; ?>
            </a>
        </li>
        <li>
            <a href="/accounts">
                <h6>Accounts</h6>
                <div class="line hover"></div>
                <?php if ($page_title === "Accounts"): ?>
                    <div class="line active"></div>
                <?php endif; ?>
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="/uitloggen">
                <h6>Uitloggen</h6>
                <div class="line hover"></div>
            </a>
        </li>
    </ul>
</nav>