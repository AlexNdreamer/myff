<?php
include '../vendor/autoload.php';
include '../config/route.php';
include '../config/databases.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection($database['mysql']);
$capsule->bootEloquent();