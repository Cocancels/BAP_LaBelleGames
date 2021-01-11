<footer>

    <div id="footer-container">
        <div>
            <ul>
                <?php foreach ($site->children()->listed() as $item) : ?>
                    <li><a href="<?= $item->url() ?>"> <?= $item->title() ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div></div>
        <div></div>
    </div>

</footer>