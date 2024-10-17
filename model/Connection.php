<php? 
  function connection(){
    $host = "localhost";
    $0user = "root";
    $password = "";
    $database = "learning";

    $connect = mysqli_connect ($host, $user, $password);
    mysqli_select_db($connect, $database);

    return $connect;
    
  }