<?php
 session_start();
 include ('connect.php');

function hashPassword($value)
 {
  return md5(sha1(sha1(md5(sha1(md5(sha1(md5($value))))))));
 }


if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $hash = mysqli_real_escape_string($con, $_POST['password']);

  $hashPassword = hashPassword($password);

  $query = mysqli_query($con,"select * from admin where email='$email' and password='$hashPassword'");
  if(mysqli_num_rows($query)>0){
    $row = mysqli_fetch_array($query); 

    $_SESSION['userid'] = $email;
    $_SESSION['id'] = session_id(); 

    echo '<script>alert("Login Success.");window.location.assign("dashboard.php");</script>';
  
  
  } else{
    echo '<script>alert("Invalid Login Details.");window.location.assign("login.php");</script>';
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../img/build7.jpg" type="image/x-icon">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link id="pagestyle" href="../assets/css/argon-dashboard.css" rel="stylesheet" />


  <title>AttlasGroup</title>

</head>

<body>

  <section id="background">
    <div class="nav nav fixed-top">
      <a href="/">
        <h2 class="navbrand">AttlasGroup</h2>
      </a>

      <i class="ph-list"  onclick="navOpen()"></i>

      <div class="navlink">
        <i class="ph-x" onclick="closeNav()"></i>
        <a href="../index.php">Home</a>
        <a href="../buy.php">Buy</a>
        <a href="../sell.php">Sell</a>
        <a href="../jobs.php">Jobs</a>
        <a href="../find_agent.php">Find Agent</a>
        <a href="../about.php">About</a>
        <div class="login">
          <a href="login.php" class="log">Login</a>
        </div>
      </div>
      <div class="login">
        <!-- <a href="">Sign In</a> -->
        <form action="">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
        <a href="login.php" class="log">Login</a>
      </div>

    </div>
    <div class="login-box col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 ms-auto" style="transform: translate(-50%, -50%); position: absolute; top: 60%; left: 50%; background-color: aliceblue; border-radius: 10px;">
      <div class="card card-plain">
        <div class="card-header pb-0 text-start">
          <h4 class="font-weight-bolder">Login</h4>
          <p class="mb-0">Enter your email and password to sign in</p>
        </div>
        <div class="card-body" >
          <form  method="post">
            <div class="errorDiv"></div>
            <div class="mb-3">
              <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" required>
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="rememberMe" name= "remember">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <div class="text-center">
              <input type="submit" name= "login" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" value="Log In" />
            </div>
          </form>
          
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
          <p class="mb-4 text-sm mx-auto">
            Don't have an account?
            <a href="signup.php" class="text-primary text-gradient font-weight-bold">Sign up</a>
          </p>
        </div>
      </div>
    </div>
    
    </section>
    <section>
      
    </section>

    <script src="https://unpkg.com/phosphor-icons"></script>
    <script src="/js/main.js"></script>

    
    </body>
    </html>