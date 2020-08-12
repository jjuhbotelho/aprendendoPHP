<?php

require 'functions.php';
require 'Task.php';

//Armazena o retorno da função connectToDb
$pdo = connectToDb();

//Armazena o retorno da função fetchAllTasks
$tasks = fetchAllTask($pdo);

require 'index.view.php';
