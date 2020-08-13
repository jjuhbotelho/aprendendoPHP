<?php require('Partials/head.php'); ?>

<ul>
    <?php /** @var $tasks */
    foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>

        </li>
    <?php endforeach; ?>
</ul>

<?php require('/Partials/footer.php'); ?>