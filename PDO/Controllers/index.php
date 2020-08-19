<?php

$users = App::get('database')->selectAll('users');

require 'Views/index.view.php';
