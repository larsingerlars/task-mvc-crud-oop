<?php
require_once '../vendor/autoload.php';

use app\controllers\TaskController;

// DIRECT TO VIEWS/INDEX.PHP + CALL/PRESENT ALL EXISTING DB ENTRIES
$entryPoint = new TaskController();
$entryPoint->getTasks();
