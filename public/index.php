<?php
require_once '../vendor/autoload.php';

use App\Controllers\TaskController;

$entryPoint = new TaskController();
$entryPoint->getTasks();
