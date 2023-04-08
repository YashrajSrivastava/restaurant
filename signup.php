<?php

// require_once 'session.php';

$connection = mysqli_connect('localhost', 'root','', 'restaurantuserdata');


mysqli_select_db($connection, 'restaurantuserdata');

if(isset($_POST['register'])){

$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password  = password_hash($password, PASSWORD_DEFAULT);

$query = "insert into data (user, email, password, to_date)
values ('$user' ,'$email' ,'$hashed_password' ,now())";
// echo($query);

mysqli_query($connection , $query);

header('location:loginform.php');
 
}
?>