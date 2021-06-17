<?php

namespace App\Models;

use PDO;

class Database
{
  public $pdo = null;
  public static ?Database $db = null;

  public function __construct()
  {
    $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=todo', 'root', '');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function getTaskData()
  {
    $statement = $this->pdo->prepare('SELECT * FROM tasks ORDER BY create_date DESC');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}
