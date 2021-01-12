<header>
    <a href="/home">
        <div id="header-image">
        </div>
    </a>

    <nav>
        <ul>
            <?php foreach ($site->children()->listed() as $item) : ?>
                <li><a href="<?= $item->url() ?>"> <?= $item->title() ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</header>