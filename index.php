<?php

$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
$sql = "SELECT * FROM tasks";
$statement = $pdo->prepare($sql);
$statement->execute();// выполнение запроса, вернет либо true, либо false
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC); //чтобы при выводе массива не было дубликатов

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>All Tasks</h1>
        <a href="create.php" class="btn btn-success">Add Task</a>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($tasks as $task): ?>

            <tr>
              <td><?= $task['id']?></td>
              <td><?= $task['title']?></td>
              <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
