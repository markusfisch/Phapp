<?php

session_start();

// you may also use __autoload()
require_once '../../Phapp.php';
require_once 'App.php';
require_once 'Auth.php';
require_once 'Login.php';
require_once 'Home.php';
require_once 'Secret.php';

$app = new App();

echo $app->contents();
