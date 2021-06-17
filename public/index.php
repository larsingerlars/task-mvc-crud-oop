<?php
require_once '../vendor/autoload.php';

use app\controllers\TaskController;

$entryPoint = new TaskController();
$entryPoint->getTasks();
