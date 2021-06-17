<?php

namespace App\Models;

class Task
{
  public $id;
  public $title;
  public $details;
  public $status;

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
