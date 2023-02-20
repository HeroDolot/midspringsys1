<?php
    include '../../connection.php';
    session_start();

    // echo "hello";

    $username = $_POST['username'];
    $password = $_POST['password'];
    

     $sql = "SELECT * FROM users WHERE username='$username'";
     $result = mysqli_query($conn,$sql);
    //  var_dump($result)
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
        // var_dump($results);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION['midspringadmin'] = "abc123";
                    header('location: ../../pages/dashboard.php');
                    exit();
                }
            }
        }
        else {
            echo "Incorrect Password";
            header('location: ../../index.php');
        }
        
        mysqli_close($conn);
    }
?>
