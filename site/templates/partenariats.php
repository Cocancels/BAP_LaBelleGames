<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $page->title() ?>
  </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?= css("assets/css/templates/header.css") ?>
  <?= css("assets/css/templates/footer.css") ?>
  <?= css('@auto') ?>
</head>

<body>

  <?php snippet('header') ?>

  <div class="divider_block1">
    <section id="partenariats">
      <h1>Aidez-nous a inciter des comportements vertueux</h1>
      <h3>S'engager ensemble pour un avenir meilleur</h3>
    </section>
  </div>
  <section id="Raisons">
    <div id="Agir">
      <h2>Les raisons d'agir à nos côtés</h2>
      <p>Aujourd’hui, pour continuer de mener à bien toutes nos actions en faveur d'un monde meilleur et sensibiliser à
        de nouvelles causes, nous avons besoin du soutien de chacun. Alors rejoignez nous ! Membres et donateurs,
        partenaires et sympathisants, nous avons bâtit ensemble une association ambitieuse qui met le jeu vidéo au
        profit d'un monde meilleur.</p>
    </div>
  </section>
  <section id="rejoignez">
    <div class="nous">
    <h2>Rejoignez-nous, on vous attend :)</h2>

    <div id="agissez-container">
      <div id="agissez-content">
        <h3>Agissez, devenez bénévole !</h3>
        <h4>Exemples de missions</h4>
        <p>
          <strong>Participer à la production d'un jeu : </strong>que vous soyez professionnel ou amateur, seul votre passion
          compte. Intégrez nos équipes techniques pour nous aider à créer nos jeux. Partagez vos connaissance et
          apprenez des autres, et vous vous formerez tout en vous amusant.</p>
        <br>
        <p>
          <strong>Participer à la production d'un jeu :</strong> que vous soyez professionnel ou amateur, seul votre passion
          compte. Intégrez nos équipes techniques pour nous aider à créer nos jeux. Partagez vos connaissance et
          apprenez des autres, et vous vous formerez tout en vous amusant.</p>
        <br>
        <p>
          <strong>Aider à l'organisation des évènements :</strong> vous êtes organisé et rigoureux, mais surtout vous aimer le
          contact humain et partager votre passion ? Alors venez nous aider sur des tâches logistiques et
          administratives.</p>
        <div id="NousRejoindre-button">
          <a href="#">Nous Rejoindre</a>
        </div>
      </div>

      <div id="rejoindre-image">
        <img src="<?= url('assets/images/event2.png') ?>">
      </div>

    </div>
</div>
  </section>
  <div class="divider2"></div>
  <section id="soutenez">
    <div id="nous">
    <h2>Soutenez-nous en faisant un don</h2>
    
    <div id="soutien-container">
    <div id="soutien-image">
      <img src="<?= url('assets/images/feuille.png') ?>">
    </div>
      <div id="soutien-content">
        <h3>Pourquoi faire un don </h3><h3> à Games for a Better World ?</h3>
        <p>Votre soutien est absolument indispensable afin de développer des jeux vidéos vertueux. Notre association à
          but non lucratif dépend du soutien de financeurs. Sans eux, nous n'avons pas les moyens et ressources
          suffisantes pour continuer à créer des jeux qui changeront la société.</p>
        <div id="NousRejoindre-button">
          <a href="#">Faire un don</a>
        </div>
      </div>
</div>
  </section>
  <div class="divider3">
    <div class="croire-content">
      <h3>Ils croient en nous</h3>
      <p>Ils placent leurs espoirs en nous, ont confiance en notre projet et croient que nous pouvons agir pour
        faire évoluer les mentalités tout en jouant. C'est pourquoi ils nous soutiennent et nous leur disons un
        grand MERCI.</p>
    </div>
  </div>
  
<div class="placement-soutient">

    <a href="<?= $page->soutient1() ?>">
      <div class="soutient-round">
      </div>
    </a>
    <a href="<?= $page->soutient2() ?>">
      <div class="soutient-round">
      </div>
    </a>
    <a href="<?= $page->soutient3() ?>">
      <div class="soutient-round">
      </div>
    </a>
    <a href="<?= $page->soutient4() ?>">
      <div class="soutient-round">
      </div>
    </a>
    <a href="<?= $page->soutient5() ?>">
      <div class="soutient-round">
      </div>
      </a>
      
  </div>

  <div class="placement-soutient2">

    <a href="<?= $page->soutient6() ?>">
      <div class="soutient-round">
      </div>
    </a>
    <a href="<?= $page->soutient7() ?>">
      <div class="soutient-round">
      </div>
    </a>
    <a href="<?= $page->soutient8() ?>">
      <div class="soutient-round">
      </div>
    </a>
    <a href="<?= $page->soutient9() ?>">
      <div class="soutient-round">
      </div>
    </a>   
  </div>
  <section id="contact-container">
  <div id="contact-content">
  <p>Vous souhaitez vous engager ou nous soutenir mais vous aimeriez en savoir plus avant de faire le grand saut ? Alors contactez nous, on répondra à toutes vos questions.</p>
  </div> 
  <div id="Nouscontacter-button">
          <a href="#">nous contacter</a>
        </div>
  
  </section>


  <?php snippet('footer') ?>
</body>

</html>