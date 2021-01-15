<header>
    <div id="header-image">
        <a href="/home">
            <img id="logo-site" src=<?= url("assets/images/logo-site.jpg") ?>>
        </a>
        <img id="burger-icon" src=<?= url("assets/images/burger-icon.png") ?>>
    </div>

    <nav id="nav">
        <ul>
            <?php foreach ($site->children()->listed() as $item) : ?>
                <li><a href="<?= $item->url() ?>"> <?= $item->title() ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</header>

<?= js("assets/js/header.js") ?>