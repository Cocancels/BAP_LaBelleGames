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
  <?php// snippet('menu') ?>

  <main class="blog" role="main">

    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>

    <?php foreach ($page->children()->listed()->flip() as $article) : ?>

      <article>
        <h1><?= $article->title()->html() ?></h1>
        <?= $article->intro()->kirbytext() ?>
        <a href="<?= $article->url() ?>">Lire l'article…</a>
      </article>

    <?php endforeach ?>

  </main>

  <?php snippet('footer') ?>

</body>

</html>