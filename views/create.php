<?php

use app\controllers\TaskController;
use app\models\Task;
use app\models\Database;

require '../app/controllers/TaskController.php';
require '../app/models/Task.php';
require '../app/models/Database.php';

$taskData['title'] = '';
$taskData['details'] = '';

$taskController = new TaskController();
$taskController->createTask();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add a new task | Tasky</title>
  <link rel="stylesheet" href="../assets/styles/main.css">
</head>

<body>
  <div class="container">
    <header class="overview">
      <h1 class="overview__title">Tasky</h1>
      <h3 class="overview__subtitle">Get your stuff done</h3>
    </header>
    <form action="" method="post" class="form--task" enctype="multipart/form-data">
      <div class="task">

        <label for="title" class="task__label">Title</label>
        <input type="text" name="title" class="task__input" value="<?php echo $taskData['title'] ?>">


        <label for="details" class="task__label">Description</label>
        <textarea name="details" class="task__textfield" cols="30" rows="10"><?php echo $taskData['details'] ?></textarea>



        <div class="task__ui"><a href="../public/index.php" class="btn--primary" type="button">Go back</a>
          <button class="btn--primary" type="submit">Save</button>
        </div>

      </div>
    </form>
  </div>
</body>

</html>

<?php


?>