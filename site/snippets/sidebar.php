<nav class="sidebar">
    <?php foreach($site->children()->listed() as $item):
    $children = $item->children()->visible(); ?>
    <a <?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a><br />
    <?php endforeach ?>
    <br>
</nav>