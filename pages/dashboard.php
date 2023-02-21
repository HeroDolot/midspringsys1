<?php
  session_start();
  if(isset($_SESSION['midAdmin']) != "abc123"){
  header('location:../index.php');
  }

  include '../components/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css2/dashboard.css">
</head>
<body>
<div class="container-fluid">  
  <div class="wrapper">
    <div class="row g-0">
      <nav aria-label="breadcrumb" class="col-6 col-md-4 justify-content-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
      </nav>
    </div>
  </div>
</div>


</body>
</html>

<script src="../js/bootstrap.bundle.min.js"></script>

