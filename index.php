<?php
    include 'connection.php';
    session_start();
    if (isset($_SESSION['midspringadmin']) && $_SESSION['midspringadmin'] == 'abc123') {
        header('location: pages/dashboard.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Midspring Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css2/login.css" rel="stylesheet">
</head>

<body class="text-center">
<main class="form-signin">
    <form action="controller/authentication/authentication.php" method="post">
        <img class="mx-auto" src="./images/logofinalpng.png" alt="" width="300px" height="300px">
        <h1 class="h2 mb-3 fw-normal">Welcome</h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" id="floatingInput" placeholder="User ID">
            <label for="floatingInput">User ID</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2013-2023</p>
    </form>
</main>
</body>
</html>
