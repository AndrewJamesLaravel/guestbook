<?php

require_once '../vendor/autoload.php';

use Medoo\Medoo;

echo "Hi, Andrew!";

$database = new Medoo ([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);

dump($database);