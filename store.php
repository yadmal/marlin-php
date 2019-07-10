<?php
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
$statement = $pdo->prepare($sql);
$statement->bindParam(":title", $_POST['title']);
$statement->bindParam(":content", $_POST['content']);
$res = $statement->execute();

header('Location: /marlin/2/marlin-php.git/');
exit;
?>
