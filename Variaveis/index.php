<!DOCTYPE html>
<html lang="en"

<head>

    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        header{
            background: aquamarine;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>

<body>

    <header>
        <h1>
            <?php

                $nome = $_GET['nome'];

                echo 'Olá, ' . $nome;

            ?>
        </h1>
        <h1><?='Olá, ' . htmlspecialchars($_GET['nome']);?></h1>

    </header>
</body>
</html>