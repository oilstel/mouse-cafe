<?php snippet('meta') ?>

<main>

   <?php snippet('header') ?>

    <section class="content">
      <h2><?= $page->title() ?></h2>
      
      <?php foreach($page->children()->visible()->sortBy('date', 'desc', 'time', 'desc') as $item): ?>
            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a> 
            – <span class="date"><?php echo $item->date()->toDate('F j, Y')  ?></span>
        <br />
      <?php endforeach ?>
    </section>

    <?php snippet('sidebar') ?>

    <?php snippet('signoff') ?>

</main>

<?php snippet('footer') ?>