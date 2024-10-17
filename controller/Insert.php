<?php
include('../model/connection.php');
$con = connection();

$nam = $_POST['nam'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO costumer (nam, lastname, username, email, pass) VALUES('$nam', '$lastname', '$username', '$email', '$pass')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: ../index.php");
} else {
    echo "No se pudo insertar el registro";
}    