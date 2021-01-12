<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $page->title() ?>
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <?= css("assets/css/templates/header.css") ?>
    <?= css("assets/css/templates/footer.css") ?>
    <?= css('@auto') ?>
</head>


<body>

    <?php snippet('header') ?>

    <div id="top-page">
        <div id="accroche">
            <h1><?= $page->accroche() ?></h1>
            <p>Nos raisons d'être</p>
        </div>

    </div>


    <div id="believe">
        <p class="accroche2"><?= $page->accroche2() ?></p>

        <ul>
            <li><?= $page->images()->nth(0) ?><p>Notre équipe</p>
            </li>
            <li><?= $page->images()->nth(1) ?><p>Nos partenaires</p>
            </li>
            <li><?= $page->images()->nth(2) ?><p>Notre philosophie</p>
            </li>
            <li><?= $page->images()->nth(3) ?><p>Notre histoire</p>
            </li>
        </ul>
    </div>

    <section id="equipe">
        <h2>Notre équipe</h2>
        <div id="equipe-content">
            <div id="equipe-text">
                <h2><?= $page->titre() ?></h2>
                <p><?= $page->contenu() ?></p>
            </div>
            <div id="equipe-image">
                <img src="<?= url('assets/images/img_300x300.png') ?>">
            </div>
        </div>
    </section>

    <section id="section-member">
        <h2 id="members-title">Les membres du bureau</h2>

        <div id="membres">
            <?php foreach ($page->drafts() as $item) : ?>
                <div class="member-card">
                    <div id="member-image">
                        <a href="<?= $item->url() ?>">
                            <?= $item->image() ?>
                        </a>
                    </div>
                    <p class="prenom-membre"><?= $item->prenom() ?>
                        <?= $item->nom() ?></p>
                    <p class="fonction-membre"><?= $item->fonction() ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </section>

    <section id="projects">

        <img id="main" src="<?= url('assets/images/mains.png') ?>">

        <div id="partenaires">
            <h2>Nos partenaires</h2>
            <p><?= $page->textePartenaire() ?></p>
        </div>

        <div class="partenaire-container">
            <a href="<?= $page->partenaire1() ?>">
                <div class="partenaire-card">
                </div>
            </a>
            <a href="<?= $page->partenaire2() ?>">
                <div class="partenaire-card">
                </div>
            </a>
            <a href="<?= $page->partenaire3() ?>">
                <div class="partenaire-card">
                </div>
            </a>
        </div>

        <div class="partenaire-container">
            <a href="<?= $page->partenaire4() ?>">
                <div class="partenaire-card">
                </div>
            </a>
            <a href="<?= $page->partenaire5() ?>">
                <div class="partenaire-card">
                </div>
            </a>
            <a href="<?= $page->partenaire6() ?>">
                <div class="partenaire-card">
                </div>
            </a>
        </div>
    </section>

    <section id="philosophie">
        <h2>Notre philosophie</h2>
        <div id="philosophie-content">
            <div id="img-philosophie">
                <img src="<?= url('assets/images/handgame.png') ?>">
            </div>
            <div id="philosophie-value">
                <div class="valeur 1">
                    <h3><?= $page->value1() ?></h3>
                    <p><?= $page->valueContent1() ?></p>
                </div>

                <div class="valeur 2">
                    <h3><?= $page->value2() ?></h3>
                    <p><?= $page->valueContent2() ?></p>

                </div>

                <div class="valeur 3">
                    <h3><?= $page->value3() ?></h3>
                    <p><?= $page->valueContent3() ?></p>

                </div>
            </div>
        </div>
    </section>

    <section id="histoire">
        <h2>Notre histoire</h2>
        <div id="histoire-container">
            <div id="histoire-content">
                <h2><?= $page->histoiretitle() ?></h2>
                <p><?= $page->histoirecontent() ?></p>
            </div>
            <div id="histoire-image">
                <img src="<?= url('assets/images/histoireimage.png') ?>">
            </div>
        </div>

        <div id="discover">
            <p>Maintenant que vous savez tout de nous, envie de voir les fruits de notre travail ? Alors cliquez pour découvrir l'ensemble de nos projets créatifs.</p>
            <div id="discover-button">
                <button>Découvrir nos projets</button>
            </div>
        </div>
    </section>

    <?php snippet('footer') ?>



</body>

</html>