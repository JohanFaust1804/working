<?php
include("model/Connection.php");

$con = connection();
$sql = "SELECT * FROM costumer";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <title>Costumers</title>
</head>

<body>
  <div class="container">
    <div class="users-form">
      <h1>Create user</h1>
        <form action="controller/Insert.php" method="POST">
          <input type="text" name="nam" placeholder="Name" required>
          <input type="text" name="lastname" placeholder="Lastnames" required>
          <input type="text" name="username" placeholder="Username" required>
          <input type="text" name="email" placeholder="Email" required>
          <input type="password" name="pass" placeholder="Password" required>
          
          <button type="submit">Create</button>

        </form>
    </div>  
  </div>  
</body>
</html>