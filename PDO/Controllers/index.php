<?php

$users = $app['database']->selectAll('users');

require 'Views/index.view.php';
