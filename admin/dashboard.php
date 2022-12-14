<?php
 session_start();
 include ('connect.php');
//  include('check_login.php');
//  require('/includes/check_login.php');

//querys
$query1 = mysqli_query($con, "select * from agent");
$agent=mysqli_num_rows($query1);
$query2 = mysqli_query($con, "select * from agent");
$buy=mysqli_num_rows($query2);
$query3 = mysqli_query($con, "select * from jobs");
$jobs=mysqli_num_rows($query3);
$query4 = mysqli_query($con, "select * from users");
$sell=mysqli_num_rows($query4);




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
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>AttlasGroup</title>

</head>
<body>
  <section id="">
    <div class="nav nav navbar-fixed">
      <a href="/">
        <h2 class="navbrand">AttlasGroup</h2>
      </a>

      <i class="ph-list"  onclick="navOpen()"></i>

      <div class="navlink">
        <i class="ph-x" onclick="closeNav()"></i>
        <a href="dashboard.php">Dashboard</a>
        <a href="buy.php">Buyers</a>
        <a href="sellers.php">Sellers</a>
        <a href="applicants.php">Applicants</a>
        <a href="agents.php">Agent Messages</a>
        <!-- <a href="/about.php">About</a> -->
        <div class="login">
          <a href="/login.php" class="log">Login</a>
        </div>
      </div>
      <div class="login">
        <!-- <a href="">Sign In</a> -->
        <a href="logout.php" class="log">Logout</a>
      </div>

    </div>

  </section>

  <section style="background-color: rgb(229, 247, 241);">
    <div class="container-fluid">
      <div class="row py-5 mb-4">
           <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="card  mb-4">
                    <div class="card-body p-3">
                      <div class="row">
                        <div class="col-8">
                          <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Number of Buyer</p>
                            <h5 class="font-weight-bolder">
                            <?php echo $buy ?>
                            </h5>
                            
                          </div>
                        </div>
                        <div class="col-4 text-end">
                          <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="card  mb-4">
                    <div class="card-body p-3">
                      <div class="row">
                        <div class="col-8">
                          <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Number of Sellers</p>
                            <h5 class="font-weight-bolder">
                            <?php echo $sell?>
                            </h5>
                            
                          </div>
                        </div>
                        <div class="col-4 text-end">
                          <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
       
    <div class="row">
     <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="card  mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Number of Applicants</p>
                    <h5 class="font-weight-bolder">
                    <?php echo $jobs ?>
                    </h5>
                    
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="card  mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Number Agent Messages</p>
                    <h5 class="font-weight-bolder">
                    <?php echo $agent ?>
                    </h5>
                    
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-info shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    </div>
  </section>


  <!--footer-->
<section>
  <div class="container-fluid h-100 footer py-5">
    <div class="footer-contents">
      <div class="footer-logo mt-2">
        <h1>AttlasGroup</h1>
        <div class="d-flex align-items-center gap-2 mb-3">
          <i class="ph-envelope-simple"></i>
          <p class="mb-0">attlasgroup90@gmail.com</p>
        </div>
        <div class="d-flex align-items-center gap-2 mb-3">
          <i class="ph-phone-call"></i>
          <p class="mb-0">+1 (720)??336-9497</p>
        </div>
      </div>

    <div class="links">
        <div class="col-md-4">
          <h6>COMPANY</h6>
          <div class="footer-links">
            <a href="/about.php">About</a>
            <a href="/about.php">Contact Us</a>
          </div>
          </div>
          <div class="col-md-4">
          <h6>BUY/SELL</h6>
          <div class="d-grid">
          <a href="/find_agent.php">Find Agent</a>
          <a href="/buy.php">Find a Home</a>
          <a href=""></a>
          </div>
        </div>
        <div class="col-md-4">
          <h6>OPPORTUNITIES</h6>
          <div class="d-grid">
            <a href="/jobs.php">Career</a>
            <a href="/jobs.php">Become a Volunteer</a>
            <a href=""></a>
            
          </div>
       </div>
    </div>

      <div class=" certificate">
        <h2>CERTIFICATION</h2>
<!-- 
        <div >
          ertyui -->
          <img src="../img/Winner-certified-award.png" alt="" class="img-fluid">
        <!-- </div> -->
      </div>

   </div>
   <div class="row mt-5">
    <div class="col-md-4">
    <div class="terms">
        <a href="terms.php">Terms</a>
        <a href="housing.php">Fair Housing</a>
     
        <a href="alert.php">Fraud Alert</a>
        <a href="">Cookies</a>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <p style="font-size: 12px;">
      &copy; <script> document.write(new Date().getFullYear()) </script>AttlasGroup. All Rights Reserved. AttlasGroup, the AttlasGroup logo, AttlasGroup Global Luxury and the AttlasGroup Global Luxury logo are trademarks of AttlasGroup Real Estate LLC. The AttlasGroup?? System is comprised of company owned offices which are owned by a subsidiary of Realogy Brokerage Group LLC and franchised offices which are independently owned and operated. The AttlasGroup System fully supports the principles of the Fair Housing Act and the Equal Opportunity Act. Listing information is deemed reliable, but is not guaranteed.
    </p>
  </div>
  </div>
</section>
<script src="./assets/js/argon-dashboard.min.js?v=2.0.2"></script>
<script src="./assets/js/app.js"></script>

      <script src="https://unpkg.com/phosphor-icons"></script>
      <script src="../js/main.js"></script>
</body>
</html>