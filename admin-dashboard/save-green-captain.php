<?php
    include "../connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];


    

    if($password != 1234)
    {
        $rand_id = rand(1,1000);
        $sql = "INSERT INTO Green_Captain (id,username,password) VALUES ($rand_id,'$username','$password')";

        if (mysqli_query($conn, $sql)) 
        {
            header('Location: index.php');
            exit;       
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
          
        mysqli_close($conn);
    }
    else
    {
        echo "<script>alert('Password no need to be a 1234.')</script>";
    }

?>