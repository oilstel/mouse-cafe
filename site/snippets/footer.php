</div>

<?php if ($page->isHomePage()): ?>
<?= js(['assets/js/home.js', '@auto']) ?>

<?php else: ?>
<?= js(['assets/js/footer.js', '@auto']) ?>
<?php endif ?>

</body>
</html>
