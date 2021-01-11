<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $page->title() ?>
    </title>
    <?= css("assets/css/templates/header.css") ?>
    <?= css('@auto') ?>
</head>


<body>

    <?php snippet('header') ?>

    <p><?= $page->text() ?></p>
    <?= $page->image() ?>

</html>