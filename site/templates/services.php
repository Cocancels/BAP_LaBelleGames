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

    <section id="services">
        <h1>Faites appel à nos services pour promouvoir des jeux vertueux</h1>
        <h3>Les jeux vidéos au service de la société</h3>
    </section>

    <section id="jeux">
        <div id="vertueux">
            <h2>Nous créons des jeux vertueux</h2>
            <p>Games for a Better World utilise le biais des jeux vidéos pour sensibiliser les joueurs aux problématiques sociétales. Chacun de ses projets est au service d’une cause, quelle soit environnementale, sociale, politique ou diplomatique.</p>
        </div>

        <div id="jeux-liste">
            <div id="jeux-container">
                <div class="jeu-card">
                    <img src="<?= url('assets/images/circle1.png') ?>">
                    <h3>Jeux vidéo hybrides, entre divertissement et sensibilisation</h3>
                    <p>Nous produisons des jeux vidéo indépendants dont le but premier n’est pas de divertir mais de faire réfléchir le joueur sur la société, sans pour autant avoir la visée pédagogique d’un ‘serious game’</p>
                </div>

                <div class="jeu-card">
                    <img src="<?= url('assets/images/circle2.png') ?>">
                    <h3>Thématiques engagées pour un monde meilleur</h3>
                    <p>Nos thématiques se concentrent sur les enjeux sociétaux comme l'environnement, la tolérance, la santé mentale et physique, et bien d'autres</p>
                </div>

                <div class="jeu-card">
                    <img src="<?= url('assets/images/circle3.png') ?>">
                    <h3>Jeux vidéo hybrides, entre divertissement et sensibilisation</h3>
                    <p>En abordant différentes thématiques, nous confrontons les joueurs à différentes causes. Nous pensons que cette confrontation les amènera à penser à leurs actions pour adopter des comportements vertueux</p>
                </div>

                <div class="jeu-card">
                    <img src="<?= url('assets/images/circle4.png') ?>">
                    <h3>100% gratuit,
                        et pour de vrai</h3>
                    <p>Nos jeux sont totalement gratuits pour être accessible à tous. Nous sommes convaincus que faire réfléchir les personnes aux problématiques sociétales est un devoir et non un business</p>
                </div>
            </div>
        </div>

    </section>
    <section id="ateliers">
        <h2>Nous encadrons des ateliers de création</h2>

        <div id="ateliers-container">
            <div id="ateliers-content">
                <h3>Participez à nos ateliers pour comprendre comment nos jeux participent à l'avenir</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                <br>
                <p>Par exemple, dans le cadre du programme "Explorateurs du numérique" de la ville de Montreuil, nous avons animé un atelier de co-création de jeux vidéo, avec des élèves de deux lycées, sur le thème de la ville comestible et de la nature en ville.</p>
                <br>
                <a>Voir l'article</a>
            </div>

            <div id="ateliers-image">
                <img src="<?= url('assets/images/atelier.png') ?>">
            </div>

        </div>
    </section>

    <section id="events">
        <h2>Nous organisons des événements qui rassemblent</h2>

        <div id="events-container">
            <div id="events-image">
                <img src="<?= url('assets/images/events.png') ?>">
            </div>

            <div id="events-content">
                <h3>Des Game Jam où professionnels du monde des jeux vidéos s'associent avec des acteurs engagés</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                <br>
                <p>Lors de notre Media Jam, nous avons voulu rassembler lors d'une semaine des game designer et développeur avec des artistes contemporains engagés, afin de les faire produire ensemble des jeux traitant de la santé mentale.</p>
                <br>
                <a>Voir l'article</a>
            </div>
        </div>
    </section>
    <section id="contact">
        <p>Nos services vous intéressent et vous aimeriez organiser un évènement ou un atelier avec nous ? Alors discutons ensemble pour voir si nous pouvons concrétiser votre projet.</p>
        <div id="contact-button">
            <button>Nous contacter</button>
        </div>
    </section>

    <?php snippet('footer') ?>


</body>

</html>