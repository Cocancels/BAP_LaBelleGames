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


<body>
    <?php snippet('header') ?>

    <section id="contact">
        <h1>Contactez-nous</h1>
        <div id="contact-container">
            <div id="contact-content">
                <input type="text" placeholder="Nom" name="nom">
                <input type="text" placeholder="Prénom" name="prenom">
                <input type="mail" placeholder="Email" name="mail">
                <input type="text" placeholder="Objet du mail" name="objet">
            </div>

            <div id="contact-message">
                <textarea name="message" placeholder="Votre message ..."></textarea>
                <div id="button-submit">
                    <button>Envoyer</button>
                </div>
            </div>

            <div id="contact-networks">
                <p>Soutenez-nous en vous abonnant à nos réseaux sociaux !</p>
                <div id="contact-logos">
                    <img src="<?= url("assets/images/ic_FB2.png") ?>">
                    <img src="<?= url("assets/images/ic_TT2.png") ?>">
                    <img src="<?= url("assets/images/ic_TTV2.png") ?>">
                    <img src="<?= url("assets/images/ic_YT2.png") ?>">

                </div>
            </div>
        </div>

    </section>

    <?php snippet('footer') ?>
</body>

</html>