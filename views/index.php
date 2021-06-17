<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasky</title>
  <link rel="stylesheet" href="../assets/styles/main.css">
</head>

<body>
  <div class="container">
    <header class="overview">
      <h1 class="overview__title">Tasky</h1>
      <h3 class="overview__subtitle">Get your stuff done</h3>
      <a href="../views/create.php" type="button" class="btn--primary">Add Task</a>
    </header>
    <main class="todo-list">
      <div class="card">
        <ul class="card__box" id="card">
          <?php foreach ($tasks as $i => $task) { ?>
            <li class="card__item">
              <span class="card__index">#<?php echo $i + 1 ?></span>
              <div class="card__item-head">
                <h2><?php echo $task['title'] ?></h2>
                <span class="card__timestamp"><?php echo $task['create_date'] ?></span>
              </div>
              <p class="card__details"><?php echo $task['details'] ?></p>
              <div class="card__actions">
                <form action="../views/update.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $task['id'] ?>">
                  <button type="submit" class="btn--primary">Edit</button>
                </form>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>

    </main>
  </div>
</body>

</html>