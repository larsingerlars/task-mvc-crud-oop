<?php

namespace app\controllers;

use app\models\Task;
use app\models\Database;

class TaskController
{

  public function getTasks()
  {
    $taskData = new Database();
    $tasks = $taskData->fetchData();

    include '../views/index.php';
  }

  public function getTaskbyId(int $id)
  {
    $task = new Task();
    $task->read($id);

    require_once '../views/update.php';
  }

  public function createTask()
  {
    $taskData = [
      'title' => '',
      'details' => '',
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $taskData['title'] = $_POST['title'];
      $taskData['details'] = $_POST['details'];

      $task = new Task();
      $task->load($taskData);
      var_dump($this);
      isset($this);
      $errors = $task->save($taskData);
      if (empty($errors)) {
        header('Location: /public/index.php');
        exit;
      }
    }
  }

  public function test()
  {
    $taskData = [
      'title' => '',
      'details' => '',
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $taskData['title'] = $_POST['title'];
      $taskData['details'] = $_POST['details'];
    }

    echo $taskData['title'];
  }
}
