<?php
 session_start();
 include ('connect.php');

 function hashPassword($value)
 {
  return md5(sha1(sha1(md5(sha1(md5(sha1(md5($value))))))));
 }


if (isset($_POST['submit']))
{
  $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password =mysqli_real_escape_string($con,$_POST['password']);
    
     
      if(user_validate_r($email)==true){
        
    $hash = hashPassword($password);
    $sql = "INSERT INTO admin (name, email, password) VALUES ('$name','$email','$hash')";

        if (mysqli_query($con, $sql)) 
        {
            echo '<script>alert("Registration Successfull.");window.location.assign("login.php");</script>';
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }  

 }else {
  echo '<script>alert("Sorry! this email has already been used");window.location.assign("signup.php");</script>';
}
}
 

 //validation functions
 function user_validate_r($email){
  global $con; 
$queryr = mysqli_query($con,"select * from admin where email='$email'");

if(mysqli_num_rows($queryr) > 0){
  return false;
}else{
  return true;
}
}

mysqli_close($con);


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
    <!-- transform: translate(-50%, -50%); position: absolute; -->
    <div class="login-box col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 ms-auto" style=" top: 60%; left: 50%; background-color: aliceblue; border-radius: 10px;">
      <div class="card card-plain">
        <div class="card-header pb-0 text-start">
          <h4 class="font-weight-bolder">Sign Up</h4>
          <p class="mb-0">Create your email and password</p>
        </div>
        <div class="card-body" >
          <form role="form" method="post" action= "">
            <div class="errorDiv"></div>
            <div class="mb-3">
              <input type="text" name="name" class="form-control form-control-lg" placeholder="Full Name" aria-label="name" required>
            </div>
            <div class="mb-3">
              <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" required>
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required>
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Password" required>
            </div>
            
            <div class="text-center">
              <input type="submit" name= "submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" value="Signup" />
            </div>
          </form>
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
          <p class="mb-4 text-sm mx-auto">
            Already have an account?
            <a href="login.php" class="text-primary text-gradient font-weight-bold">Login</a>
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