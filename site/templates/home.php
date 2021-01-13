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
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?= css("assets/css/templates/header.css") ?>
    <?= css("assets/css/templates/footer.css") ?>
    <?= css('@auto') ?>
</head>


<body>

    <?php snippet('header') ?>
    <div class="firstBlock">
        <div id="img_firstBlock">
            <h2><?= $page->TitreResume() ?></h2>
            <p><?= $page->Resume() ?></p>
            <div id="EnSavoirPlus-button3">
                <button>En savoir Plus</button>
            </div>
        </div>
    </div>
    <section class="btw1_2">
        <p>Nos projets</p>
    </section>
    <div class="secondBlock">
        <div id="img_secondBlock">
            <div id="nos_projets">
                <?php foreach (page("projects")->drafts() as $item) : ?>
                    <div id="carte-projet">
                        <div id="image-projet">
                            <?= $item->image() ?>
                        </div>
                        <p class="project-name"><?= $item->nom() ?></p>
                        <p class="category"><?= $item->categorie() ?></p>
                        <div id="decouvrir">
                            <a href="<?= $item->url() ?>">Découvrir</a>

                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>

    </div>

    <div class="thirdBlock">
        <article id="titre_thirdBlock">
            <p> Nos services</p>
        </article>
        <div id="Nos_services">
            <article class="Creation">
                <img src="../../assets/images/ic_circle4.png" alt="">
                <p>Création de jeux vertueux</p>
            </article>
            <article class="Creation">
                <img src="../../assets/images/ic_circle5.png" alt="">
                <p>Animation d'ateliers créatifs</p>
            </article>
            <article class="Creation">
                <img src="../../assets/images/ic_circle6.png" alt="">
                <p>Organisation d'évènements</p>
            </article>
        </div>
        <div id="placement_btn">
            <div id="EnSavoirPlus-button">
                <a href="/services">En savoir Plus</a>
            </div>
        </div>
    </div>
    <div class="fourth_block">

        <h2 id="Titre_Np">Nos Partenaires</h2>
        <div id="Partenaire-container">
            <div id="partenaire-image">
                <img src="<?= url('assets/images/img_300x300.png') ?>">
            </div>
            <div id="Partenaire-content">
                <h2><?= $page->NosPartenairestitle() ?></h2>
                <p><?= $page->NosPartenairescontent() ?></p>
                <div id="EnSavoirPlus-button2">
                    <button>En savoir Plus</button>
                </div>
            </div>
        </div>
    </div>

    <div id="fifth-block">
        <h2>Nos dernières nouvelles</h2>
        <div id="bouton-nouvelles">
            <a href="/blog">Dernières nouvelles</a>
        </div>
    </div>


    </div>

    <?php snippet('footer') ?>


</body>

</html>