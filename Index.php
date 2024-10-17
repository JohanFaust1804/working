<php?
  include("model/Connection.php");
    
    $con = connection();
    $sql = "SELECT * FROM users";
    $query = mysqli_query ($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="users-form">
      <h1>Crear usuario</h1>
        <form action="controller/Insert.php" method="POST">
          <input type="text" name="nam" placeholder="Name" required>
        </form>
    </div>  
  </div>  
</body>
</html>