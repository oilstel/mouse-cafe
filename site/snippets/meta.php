<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="<?php if($logo = page('home')->cover()->toFile()): ?><?= $logo->url() ?><?php endif ?>">

<title><?php if ($page->isHomePage()): ?><?= $site->title() ?><?php else: ?><?= $page->title() ?> – <?= $site->title() ?><?php endif ?></title>

  <?php if ($page->isHomePage()): ?>
    <?= css(['assets/css/home.css', '@auto']) ?>
  <?php endif ?>

  <?= css(['assets/css/main.css', '@auto']) ?>

  <?= js(['assets/js/jquery.js', '@auto']) ?>

  <?php if ($page->isHomePage()): ?>

  <?php endif ?>

</head>
<body>


