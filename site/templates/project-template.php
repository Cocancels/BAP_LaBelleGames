<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $page->nom() ?>
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <?= css("assets/css/templates/header.css") ?>
    <?= css("assets/css/templates/footer.css") ?>
    <?= css('@auto') ?>
</head>


<style>
    #project-look {
        background-image: url(<?= $page->images()->nth(1)->url() ?>);
        background-repeat: no-repeat;
        background-size: cover;

    }
</style>

<body>

    <?php snippet('header') ?>


    <section id="project-look">
        <div id="project-div">
            <div id="project-content">
                <h2><?= $page->nom() ?></h2>
                <iframe src="<?= $page->video() ?>" frameborder="0" allowfullscreen></iframe>
                <h3>Synopsis</h3>
                <p><?= $page->synopsis() ?></p>
            </div>

            <div id="project-subinfos">
                <p><?= $page->categorie() ?></p>
                <p class="strong">.</p>
                <p><?= $page->plateformes() ?></p>
                <p class="strong">.</p>
                <p><?= $page->date() ?></p>
                <p class="strong">.</p>
                <p><?= $page->editeur() ?></p>
            </div>

        </div>
    </section>

    <section id="caract">
        <h2>Les caractéristiques du jeu</h2>
        <div id="caract-container">
            <div id="caract-content">
                <div class="infos genre">
                    <h3>Genre</h3>
                    <p><?= $page->categorie() ?>, <?= $page->categorie2() ?></p>
                </div>

                <hr>

                <div class="infos plateformes">
                    <h3>Plateformes</h3>
                    <p><?= $page->plateformes() ?></p>
                </div>

                <hr>

                <div class="infos date">
                    <h3>Parution</h3>
                    <p><?= $page->date() ?></p>
                </div>

                <hr>

                <div class="infos editeur">
                    <h3>éditeur</h3>
                    <p><?= $page->editeur() ?></p>
                </div>

                <hr>
                <div id="steam">
                    <p>Vous pouvez retrouver <?= $page->nom() ?> sur Steam !</p>
                    <div id="bouton-steam">
                        <a href="<?= $page->steam() ?>">Jouer sur Steam</a>
                    </div>
                </div>
            </div>

            <div id="caract-image">
                <?= $page->image() ?>
            </div>
        </div>
    </section>

    <section id="other-projects">
        <h2>ne retenez pas votre curiosité, jetez un coup d'œil à nos autres projets :)</h2>
        <div id="bouton-projects">
            <a href="/projects">Voir les projets</a>
        </div>
    </section>

    <?php snippet('footer') ?>

</body>

</html>