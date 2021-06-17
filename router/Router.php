<?php

use App\Models\Database;

class Router
{
  public Database $db;

  public function __construct(Database $db)
  {
    $this->db = $db;
  }

  public function direct()
  {
  }

  public function renderView($action)
  {
  }
}
