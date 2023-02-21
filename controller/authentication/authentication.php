<?php
    include '../../connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();

    $sql = "SELECT * FROM users WHERE username ='$username'";
    $result = $conn->query($sql);
    // var_dump($result);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
            // echo $row["roles"];
                if ($row["roles"] == "admin") {
                    // return "true";  
                    $_SESSION['midAdmin'] = "abc123";
                    header('location:../../pages/dashboard.php');
                }
            }
            else {
            echo "invalid password";
            }
        }
        
    }else {
        // header('location:../../index.php');
        echo "<script>alert('Invalid Password'); window.location.href='../../index.php';</script>";
    }
    $conn->close();
?>
