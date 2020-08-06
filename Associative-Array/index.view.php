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

    <!-- Dessa forma podemos ver que o boolean não aparece na listagem -->
    <h1>Task do Dia: </h1>
    <ul>
        <?php foreach ($task as $heading => $value) : ?>
            <li><strong><?= ucwords($heading); ?></strong>: <?= $value; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Dessa forma temos mais controle do conteúdo e podemos trazer o boolean -->
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
            <strong>Status: </strong>
            <?php
            /* If ternário para utilizar o boolean
                echo $task['completed'] ? 'Complete' : 'Incomplete'; */
            ?>
            <?php if ($task['completed']) : ?>
                <span class="icon">&#9989;</span>
            <?php else: ?>
                <span class="icon">Incomplete</span>
            <?php endif; ?>
        </li>
        <li>
            <strong>Is urgent: </strong>
            <?= $task['urgent'] ? 'Yes' : 'No'; ?>
        </li>
    </ul>

</header>
</body>
</html>