<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        header {
            background: aquamarine;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>

<body>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>

        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>