<?php
 session_start();
 include ('connect.php');

//  $email = $_SESSION["email"];

 if (isset($_POST['attend'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $_SESSION["email"] = $email;

    header ("location: ");
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

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<style>
  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }
</style>
<body>
  <section id="">
    <div class="nav nav navbar-fixed">
      <a href="/">
        <h2 class="navbrand">AttlasGroup</h2>
      </a>

      <i class="ph-list"  onclick="navOpen()"></i>

      <div class="navlink">
        <i class="ph-x" onclick="closeNav()"></i>
        <a href="/index.php">Home</a>
        <a href="/buy.php">Buyers</a>
        <a href="sellers.php">Sellers</a>
        <a href="applicants.php">Applicants</a>
        <a href="agents.php">Agent Messages</a>
        <div class="login">
          <a href="/login.php" class="log">Login</a>
        </div>
      </div>
      <div class="login">
        <!-- <a href="">Sign In</a> -->
        <a href="login.php" class="log">Login</a>
      </div>

    </div>

  </section>

  <section>
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <div class="card">

          <div class="card-header">
            <h5 class="mb-0">Agent Messages</h5>
          </div>
          <div class="table-responsive p-3">

             <?php
                  //connect to database
                                        
                    //select database
                    mysqli_select_db($con,'real_estate');
                    //select query
                $query = "SELECT * FROM agent";
                //Execute query
                $records= mysqli_query($con, $query)

              ?>

            <table id="table" class="table table-flush" style="width:100%">
              <thead class="thead-light">
                <tr>
                  <th data-sortable="" style="width: 10%;"><a href="#" class="dataTable-sorter">S/N</a>
                  </th>
                  <th data-sortable="" style="width: 20%;"><a href="#" class="dataTable-sorter">Name</a>
                  </th>
                  <th data-sortable="" style="width: 20%;" class="asc"><a href="#" class="dataTable-sorter">Email</a>
                  </th>
                  <th data-sortable="" style="width: 20%;"><a href="#" class="dataTable-sorter">Phone</a>
                  </th>
                  <th data-sortable="" style="width: 20%;"><a href="#" class="dataTable-sorter">Message</a>
                  </th>
                  <th data-sortable="" style="width: 20%;"><a href="#" class="dataTable-sorter">Date</a>
                  </th>
                  <th data-sortable="" style="width: 20%;"><a href="#" class="dataTable-sorter">Attend</a>
                  </th>
                </tr>
              </thead>

              <tbody>

                <?php
                  // output data of each row
                  $i=1;    
                  $query= mysqli_query($con,"select * from agent");
                  $n_query = mysqli_query($con,"select * from agent where email = '$email'");
                      $n_fetch = mysqli_fetch_array($n_query);
                  if (mysqli_num_rows($query) > 0) {
                      while($row = mysqli_fetch_array($query)) {
                  ?> 
                  <!--name-->
                  <?php $name = $row['name']; ?>
                <tr>
                  <td class="text-sm font-weight-normal"><?php echo $i ?></td>
                  
                  <td class="text-sm font-weight-normal">
                     <?php echo $name ?>
                    </td>
                    <td class="text-sm font-weight-normal"><?php echo $row['email'] ?></td>
                  
                  <td class="text-sm font-weight-normal"><?php echo $row['phone'] ?></td>
                  <td class="text-sm font-weight-normal"><?php echo $row['message'] ?></td>
                  
                  <td class="text-sm font-weight-normal"><?php echo $row['date'] ?></td>
                  <td class=" text-center text-sm">
                     <form method="post" >
                       <input name="email" value="<?php echo $row['email'] ?>" type="hidden" >
                       <input type="submit" name="attend" value="Attend"class="btn btn-sm btn-info">
                       <!-- <a href="" name="attend" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Attend</a> -->
                       </form>
                  </td>
                </tr>

                <?php
                    $i++;      
                    }
                    } else {
                    echo "there is no aplicant yet";
                    }
                  ?> 
                <!--  -->
              </tbody>
              
            </table>

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
          <p class="mb-0">+1 (720) 336-9497</p>
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
      &copy; <script> document.write(new Date().getFullYear()) </script>AttlasGroup. All Rights Reserved. AttlasGroup, the AttlasGroup logo, AttlasGroup Global Luxury and the AttlasGroup Global Luxury logo are trademarks of AttlasGroup Real Estate LLC. The AttlasGroup® System is comprised of company owned offices which are owned by a subsidiary of Realogy Brokerage Group LLC and franchised offices which are independently owned and operated. The AttlasGroup System fully supports the principles of the Fair Housing Act and the Equal Opportunity Act. Listing information is deemed reliable, but is not guaranteed.
    </p>
  </div>
  </div>
</section>

  <!-- datatable plugins -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


<script src="./assets/js/argon-dashboard.min.js?v=2.0.2"></script>
<script src="./assets/js/app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<script src="https://unpkg.com/phosphor-icons"></script>
<script src="../js/main.js"></script>
</body>
</html>