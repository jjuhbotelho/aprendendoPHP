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

<header>

    <ul>
        <?php foreach ($nicknames as $nickname) : ?>
            <li><?= $nickname; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($animals as $animal) : ?>
            <li><?= $animal; ?></li>
        <?php endforeach; ?>
    </ul>
    <ul>

        <?php

        foreach ($nicknames as $nickname) {
            echo "<li>$nickname</li>";
        }
        ?>

    </ul>

</header>
</body>
</html>