<?php
$connection = mysqli_connect('localhost', 'root');
// if($connection){
//      echo "Thank You Contacting Us... Please Go Back"; 
// }
// else{
//     echo "No Connection";
// }


mysqli_select_db($connection, 'restaurantuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pincode = $_POST['pincode'];
$comments = $_POST['comments'];

$query = "insert into userinfodata1 (user, email, mobile , pincode , comments)
values ('$user' ,'$email' ,'$mobile','$pincode' ,'$comments')";
// echo($query);

mysqli_query($connection , $query);

header('location:index.php');
 

?>