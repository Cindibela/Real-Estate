<?php
Session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./img/build7.jpg" type="image/x-icon">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link id="pagestyle" href="./assets/css/argon-dashboard.css" rel="stylesheet" />


  <title>AttlasGroup</title>

</head>

<body>

  <section>
    <div class="nav nav ">
      <a href="/">
        <h2 class="navbrand">AttlasGroup</h2>
      </a>

      <i class="ph-list" onclick="navOpen()"></i>

      <div class="navlink">
        <i class="ph-x" onclick="closeNav()"></i>
        <a href="index.php">Home</a>
        <a href="buy.php">Buy</a>
        <a href="sell.php">Sell</a>
        <a href="jobs.php">Jobs</a>
        <a href="find_agent.php">Find Agent</a>
        <a href="about.php">About</a>
        <!-- <div class="login">
          <a href="login.php" class="log">Login</a>
        </div> -->
      </div>
      <div class="login">
        <!-- <a href="">Sign In</a> -->
        <form action="">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
        <a href="admin/login.php" class="log">Login</a>
      </div>

    </div>

  </section>