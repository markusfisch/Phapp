<?php

// you may also use __autoload()
require_once '../../Phapp.php';
require_once 'App.php';
require_once 'Home.php';
require_once 'Search.php';
require_once 'Result.php';

$app = new App();

echo $app->contents();
