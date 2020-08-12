<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        ul {
            background: aquamarine;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>

<body>

<nav>
    <ul>
        <li><a href="about.view.php">About Page</a></li>
        <li><a href="contact.view.php">Contact Page</a></li>
        <li><a href="about-culture.view.php">Culture Page</a></li>
    </ul>
</nav>
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