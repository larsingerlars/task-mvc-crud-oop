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
    $statement = $this->pdo->prepare('SELECT * FROM tasks WHERE id = :id LIMIT 1');
    $statement->bindValue(':id', $id);
    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  // UPDATE DB
  public function db_updateTask(Task $task)
  {
    $statement = $this->pdo->prepare('UPDATE tasks SET title = :title, details = :details WHERE id = :id LIMIT 1');
    $statement->bindValue(':id', $task->id);
    $statement->bindValue(':title', $task->title);
    $statement->bindValue(':details', $task->details);

    $statement->execute();
  }

  // CREATE NEW DB ENTRY
  public function db_createTask(Task $task)
  {
    $statement = $this->pdo->prepare('INSERT INTO tasks (title, details, create_date) VALUES ( :title, :details, :date)');
    $statement->bindValue(':title', $task->title);
    $statement->bindValue(':details', $task->details);
    $statement->bindValue(':date', date('Y-m-d H:i:s'));

    $statement->execute();
  }

  // DELETE ENTRY FROM DB
  public function db_deleteTask(int $id)
  {
    $statement = $this->pdo->prepare('DELETE FROM tasks WHERE id = :id LIMIT 1');
    $statement->bindValue(':id', $id);

    $statement->execute();
  }
}
