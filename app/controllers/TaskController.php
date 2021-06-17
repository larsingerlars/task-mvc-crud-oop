<?php

namespace App\Controllers;

use App\Models\Task;
use App\Models\Database;

class TaskController
{

  public function getTasks()
  {
    $taskData = new Database();
    $tasks = $taskData->getTaskData();

    include '../views/index.php';
  }

  public function getTaskbyId(int $id)
  {
    $task = new Task();
    $task->read($id);

    require_once '../views/update.php';
  }
}
