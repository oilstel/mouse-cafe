<?php snippet('meta') ?>

<main>

   <?php snippet('header') ?>

    <section class="content">
        <h2><i>Just in...</i></h2>

        <?php foreach($site->grandChildren()->limit(5)->visible()->sortBy('date', 'desc', 'time', 'desc') as $item): ?>
            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a> – <span class="date"><?php echo $item->date()->toDate('F j, Y')  ?></span>
            <br />
        <?php endforeach ?>

        <br />

        <hr id="mouse-break" />

        <?= $page->text()->kt() ?>
        
    </section>

    <?php snippet('sidebar') ?>

    <?php snippet('signoff') ?>

</main>

<?php snippet('footer') ?>