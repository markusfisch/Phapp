<?php

require_once '../../Phapp.php';
require_once 'Hello.php';

$app = new Phapp();

echo $app->process( 'Hello' );
