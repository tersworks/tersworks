<?php

use Tersworks\Foundation\Http\Request;

define('TERSWORKS_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = (require_once __DIR__ . '/../bootstrap/app.php');

$app->handleRequest(Request::capture());
