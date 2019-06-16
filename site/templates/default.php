<?php snippet('meta') ?>

<main>

   <?php snippet('header') ?>

    <section class="content">
      <h2><?= $page->title() ?></h2>
      <?= $page->text()->kt() ?>
    </section>

    <?php snippet('sidebar') ?>

    <?php snippet('signoff') ?>

</main>

<?php snippet('footer') ?>