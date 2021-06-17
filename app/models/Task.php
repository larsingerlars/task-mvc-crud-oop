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

  // INITIATE SAVING TO DB
  public function save()
  {
    $db = new Database();

    // PUSH DATA TO DATABASE EITHER AS UPDATED OR AS NEW ENTRY
    if ($this->id) {
      $db->db_updateTask($this);
    } else {
      $db->db_createTask($this);
    }
  }

  // RETRIEVE DATA
  public function read(int $id)
  {
    $id = $_GET['id'] ?? null;
    if ($id) {
      $db = new Database();

      // GET DATA FROM DATABASE
      $data = $db->fetchDataById((int)$id);
      if (!empty($data)) {
        $this->id = $id;
        $this->title = $data['title'];
        $this->details = $data['details'];
        $this->status = $data['status'];
        $this->create_date = $data['create_date'];

        return $this;
      }
    }
    return false;
  }

  // DELETE TASK
  public function delete(int $id)
  {
    if ($id) {
      $db = new Database();
      $db->db_deleteTask((int) $id);
    }
  }
}
