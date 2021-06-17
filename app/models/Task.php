<?php

namespace app\models;

use app\models\Database;

class Task
{
  public ?int $id = null;
  public string $title;
  public string $details;
  // public $status; --> NOT YET IMPLEMENTED

  // PREPARING DATABASE DATA
  public function load($taskData)
  {
    $this->id = $taskData["id"] ?? null;
    $this->title = $taskData["title"];
    $this->details = $taskData["details"] ?? '';
  }

  public function save()
  {
    $errors = [];

    // SIMPLE INPUT VALIDATION IF REQUIRED FIELDS ARE FILLED OUT
    if (!$this->title) {
      $errors[] = "Title name is required";
    };

    // IF INPUT VALIDATION SUCCESSFUL DATA GOES TO DATABASE
    if (empty($errors)) {
      $db = Database::$db;

      // PUSH TO DATABASE EITHER AS UPDATED OR AS NEW ENTRY
      if ($this->id) {
        $db->db_updateTask($this);
      } else {
        $db->db_createTask($this);
      }
    }

    return $errors;
  }

  // GET METHODS
  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getDetails()
  {
    return $this->details;
  }

  public function getStatus()
  {
    return $this->status;
  }

  // SET METHODS
  public function setTitle(string $title)
  {
    $this->title = $title;
  }

  public function setDetails(string $details)
  {
    $this->details = $details;
  }

  public function setStatus(bool $status)
  {
    $this->status = $status;
  }

  // CRUD OPERATIONS
  public function create(array $data)
  {
  }

  public function read(int $id)
  {
    $id = $_GET['id'] ?? null;
  }

  public function update(int $id, array $data)
  {
  }

  public function delete(int $id)
  {
  }
}
