<?php

$tasks = $app['database']->selectAll('todos');

require 'Views/index.view.php';
