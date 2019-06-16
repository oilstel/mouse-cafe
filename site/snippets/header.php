<section class="title">
    <?php if($logo = page('home')->cover()->toFile()): ?><a href="<?= $site->url() ?>"><img src="<?= $logo->url() ?>" id="logo" /></a><?php endif ?>
    Hello and welcome to <?= $site->title() ?>.
    <p id="subtitle"><i><?= page('home')->today() ?></i></p>
</section>

<section class="marquee"><?= page('home')->marquee()->kt() ?></section>