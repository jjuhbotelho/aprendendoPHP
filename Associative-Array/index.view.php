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
        <?php foreach ($person as $feature => $val) : ?>
            <li><strong><?= $feature; ?></strong> <?= $val; ?></li>
        <?php endforeach; ?>
    </ul>


    <h1>Task do Dia: </h1>
    <ul>
        <?php foreach ($task as $heading => $value) : ?>
            <li><strong><?= ucwords($heading); ?></strong>: <?= $value; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>
        <li>
            <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
        </li>
        <li>
            <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
        </li>
    </ul>

</header>
</body>
</html>