<?php

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';
