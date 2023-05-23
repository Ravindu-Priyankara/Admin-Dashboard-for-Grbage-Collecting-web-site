<?php
    session_start();
    include "connect.php";

    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    $_SESSION['username'] = $username;
    $_SESSION['username_name'] = $username;


    $sql1 = mysqli_query($conn,"SELECT * FROM web_admin WHERE username = '$username' AND password = '$password'");
    $result = mysqli_num_rows($sql1);
    
    if($result > 0 )
    { 
        
        header('Location: /admin-dashboard/index.php');
        exit;       
    }
    else
    {
        echo 'The username or password are incorrect!';
    }

?> 