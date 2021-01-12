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

    <section id="top-image">
        <div id="top-image-content">
            <h1>Jouer autrement pour mieux comprendre les enjeux de demain</h1>
            <h3>Nos projets créatifs</h3>
        </div>
    </section>

    <section id="favorites">
        <h2>Nos projets favoris</h2>

        <div id="project-container">
            <div id="project-content">
                <p>Les monstres ne le sont qu'à nos yeux. Levons le voile de l'inconnu pour découvrir les merveilles qui s'y cachent</p>
                <div id="project-link">
                    <a href="/projects/projet-2">Voir le projet</a>
                </div>
            </div>

            <div id="project-image">
                <img src="<?= url('assets/images/project1.png') ?>">
            </div>
        </div>
        <hr id="hr">
        <div id="project2-container">
            <div id="project2-image">
                <img src="<?= url('assets/images/project2.png') ?>">
            </div>

            <div id="project2-content">
                <p>Urbanistes en herbes, à vos consoles pour créer les villes de demain !</p>
                <div id="project2-link">
                    <a href="/projects/projet-1">Voir le projet</a>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <h2>Notre portfolio</h2>
        <div id="projet-cards">
            <?php foreach ($page->drafts() as $item) : ?>
                <div class="projet-card">
                    <div class="projet-image">
                        <a href="<?= $item->url() ?>">
                            <?= $item->image() ?>
                        </a>
                    </div>
                    <p class="projet-name">
                        <?= $item->nom() ?></p>
                    <p class="projet-categorie"><?= $item->categorie() ?></p>
                </div>
            <?php endforeach ?>
        </div>
        <div id="projet-bouton">
            <button>Voir plus</button>
        </div>
    </section>

    <div id="soutien">
        <h2>Vous aimez nos projets et vous souhaitiez les soutenir ? Alors devenons partenaires pour développer ensemble les jeux vidéo qui participent à rendre le monde meilleur.</h2>
        <div id="soutien-bouton">
            <a href="/association">Voir les partenariats</a>
        </div>
    </div>

    <?php snippet('footer') ?>
</body>

</html>