<?php

namespace app\models;

use app\models\Task;
use PDO;

class Database
{
  public $pdo = null;
  public static ?Database $db = null;

  public function __construct()
  {
    // SETUP DB CONNECTION + ERROR HANDLING
    $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=todo', 'root', '');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    self::$db = $this;
  }

  // RETRIEVE ALL DATA FROM DATABASE AS ARRAY
  public function fetchData()
  {
    $statement = $this->pdo->prepare('SELECT * FROM tasks ORDER BY create_date DESC');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function fetchDataById($id)
  {
    $statement = $this->pdo->prepare('SELECT * FROM products WHERE id = :id');
    $statement->bindValue(':id', $id);
    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  // UPDATE DB
  public function db_updateTask()
  {
  }

  public function db_createTask(Task $task)
  {
    $statement = $this->pdo->prepare('INSERT INTO tasks (title, details, create_date) VALUES ( :title, :details, :date)');
    $statement->bindValue(':title', $task->title);
    $statement->bindValue(':details', $task->details);
    $statement->bindValue(':date', date('Y-m-d H:i:s'));

    $statement->execute();
  }
}
