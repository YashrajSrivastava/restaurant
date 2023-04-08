<?php
 
 $login='false';
 $showError = 'false';
// require_once 'session.php';
// // require_once 'db.php' ;

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $connection = mysqli_connect('localhost', 'root','', 'restaurantuserdata');
    if ($connection){
        echo 'success';
    }
    else{
    die("Error". mysqli_connect_errno());
    }
    mysqli_select_db($connection, 'restaurantuserdata');
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM data where 'user' = '$user' AND 'password' = '$password'";
    $result = mysqli_query($connection,$sql);
    $num = mysqli_num_rows($result);
          
    if($num == 1){
        $login= true;
        header("location: loginpage.php");
    }
    else{
        $showError = 'Invalid Credentials';
    }

}
?> 

// $connection = mysqli_connect('localhost', 'root','', 'restaurantuserdata');


// mysqli_select_db($connection, 'restaurantuserdata');

// if(isset($_POST['login'])){

//     $user = $_POST['user'];
//     $password = $_POST['password'];


//     $query = "SELECT * FROM data (user, password) 
// values ('$user' ,$password', )";





// while ($row = mysqli_fetch_array($query)){


//     $id = $row['id'];
//     $hashed_password = $row['password'];
//     $user = $row ['username'];


//     if(password_verify($password, $hashed_password)){
     
//         $_SESSION['id'] = $id ;
//         $_SESSION['user'] = $user ;
//         header('location: index.php');
//     }
//     else{
//         echo "Error- invalid use or password";
        
//     }
// }


// header('location:loginpage.php');


// }



//    include("config.php");
//    session_start();


//    if($_SERVER["REQUEST_METHOD"] == "POST") {
//       // username and password sent from form 
      
//       $user = mysqli_real_escape_string($connection,$_POST['user']);
//       $password = mysqli_real_escape_string($connection,$_POST['password']); 
      
//       $sql = "SELECT * FROM data WHERE user = '$user' and password = '$password'";
//       $result = mysqli_query($connection,$sql);
//       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//       $active = $row['active'];
      
//       $count = mysqli_num_rows($result);
      
//       // If result matched $myusername and $mypassword, table row must be 1 row
		
//       if($count == 1) {
        
//         //  $_SESSION['login_user'] = $myusername;
//         $_SESSION['id'] = $id ;
//         $_SESSION['user'] = $user ;
//          echo"<h1>login thanks</h1>";
//          header("location: loginpage.php");
//       }else {
//          echo "Your Login Name or Password is invalid";
//       }
      


//     }


 