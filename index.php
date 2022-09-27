<?php
require_once('includes/header.php');

if (isset($_POST['send'])){


  $name = mysqli_real_escape_string($con,$_POST['name']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $message = mysqli_real_escape_string($con,$_POST['message']);


  $sql = "INSERT INTO `agent`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";


        if (mysqli_query($con, $sql)) {
            echo '<script>alert("Message Sent Successfully.");window.location.assign("index.php");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }  
      }
    
  
?>
  <section class="index" style=" background:linear-gradient(rgba( -0.5,-0.5,-0.5,-0.5),rgba( -0.5,-0.5,-0.5,-0.5)),url(./img/nh8.jpg); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh; position:relative">
    <div class="container-fluid px-0">
      <div class="row search mx-auto">
        <div class="row justify-content-center align-items-center">
          <div class="col">
            <h2 style="font-size:80px;">Attlas</h2>
            <h1>Group</h1>
            <span class="px-3 py-2 rounded-pill bg-primary text-white my-5">Alpha</span>
            <p class="fw-bolder mt-2">The Home Advantage,Where Dreams Come Home</p>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-auto">
            <form class="mx-auto">
              <input type="" class="form-control form-control-lg" placeholder="City,State,Zip">
            </form>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container-fluid">
      <div class="row justify-content-center  gx-5 listings d-xs-block p-5 gap-4">
        <div class="col-md-4 amount">

          <h1>$500M</h1>
          <h3>Gross Sales</h3>
          <hr>

          <h1>200M</h1>
          <h3>Investment Partners</h3>
          <hr>

          <h1>$200M</h1>
          <h3>Principal Equity Invested</h3>
          <hr>
          <a role="button" href="about.php" class="btn btn-md btn-white rounded-pill">
            About Us
          </a>

        </div>

        <div class="col-md-7 text px-0">
          <h1>Estate Developer</h1>
          <p>
            AttlasGroup vertically integrated investment management approach yields secure multi-family real estate
            investment opportunities in prime New York niche neighborhoods. We leverage two decades of experience in
            architecture, development, and asset management to create spaces that build value and minimize risk for both
            investors and the residents who live in them. Our winning combination of high-returns and risk-adjusted
            strategies has led to an almost perfect track record of investment success.

          </p>
          <a role="button" href="about.php" class="btn btn-md btn-white rounded-pill">
            About Us
          </a>
        </div>

      </div>

    </div>
  </section>
  <section>
    <div class="container">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <h2 class="mb-1">Recent Projects</h2>
              <p class="text-sm">Architects design houses</p>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a href="buy.php" class="d-block shadow-xl border-radius-xl">
                        <img src="./img/list7.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">3 bd |3 ba | 1,746 sqft</p>
                      <a href="javascript:;">
                        <h5>
                          $450,000
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Est. payment: $2,588/mo<br>
                        9901 Fisher Bay Ct, Las Vegas, NV 89178
                      </p>

                    </div>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Contact Agent
                      </button>
                    </div>

                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a href="buy.php" class="d-block shadow-xl border-radius-xl">
                        <img src="./img/list4.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">7 bd | 6 ba | 3,975 sqft</p>
                      <a href="javascript:;">
                        <h5>
                          $1,200,000
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Est. payment: $6,751/mo<br>
                        9500 Rocky Cliff Pl, Las Vegas, NV 89144.
                      </p>

                    </div>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Contact Agent
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a href="buy.php" class="d-block shadow-xl border-radius-xl">
                        <img src="./img/list5.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">4 bd |3 ba | 1,834 sqft</p>
                      <a href="javascript:;">
                        <h5>
                          $465,000
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Est. payment: $2,645/mo<br>
                        425 Coco Palms Ave, Las Vegas, NV 89123
                      </p>

                    </div>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Contact Agent
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a href="buy.php" class="d-block shadow-xl border-radius-xl">
                        <img src="./img/list6.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">4 bd |3 ba | 2,289 sqft</p>
                      <a href="javascript:;">
                        <h5>
                          $590,000
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        8332 Fawn Heather Ct, Las Vegas, NV 89149
                      </p>
                    </div>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Contact Agent
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a href="buy.php" class="d-block shadow-xl border-radius-xl">
                        <img src="./img/list10.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">4 bd |3 ba |2,582 sqft</p>
                      <a href="javascript:;">
                        <h5>
                          $729,900
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Est. payment: $4,185/mo<br>
                        4706 Antelope Wells Dr, Las Vegas, NV 89129
                      </p>

                    </div>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Contact Agent
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a href="buy.php" class="d-block shadow-xl border-radius-xl">
                        <img src="./img/list2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">3 bed 2 bath 1,423 sq ft </p>
                      <a href="javascript:;">
                        <h5>
                          $310,000
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Est. payment: $1,826/mo<br>
                        5760 Cinnabar Ave, Las Vegas, NV 89110

                      </p>

                    </div>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Contact Agent
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a href="buy.php" class="d-block shadow-xl border-radius-xl">
                        <img src="./img/list9.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">5 bd |4 ba |4,224 sqft</p>
                      <a href="javascript:;">
                        <h5>
                          $625,000
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Est. payment: $3,493/mo
                        <br>
                        782 Santree Cir, Las Vegas, NV 89110.
                      </p>

                    </div>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Contact Agent
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a href="buy.php" class="d-block shadow-xl border-radius-xl">
                        <img src="./img/list8.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">1 bd |1ba |750 sqft</p>
                      <a href="javascript:;">
                        <h5>
                          $179,888
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Est. payment: $1,551/mo<br>
                        211 E Flamingo Rd #402, Las Vegas, NV 89169 <br>
                      </p>
                    </div>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Contact Agent
                      </button>
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
  

  <!--agent Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Agent</h5>
        <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  method="post" action="find_agent.php">
       <div class="modal-body">
        <p class="mb-0">Send Our Agent Message</p>
          <div class="errorDiv"></div>
          <div class="mb-3">
            <label for="">Name</label>
            <input name="name" type="text" class="form-control form-control-lg" placeholder="Name" aria-label="name" required>
          </div>
          <div class="mb-3">
            <label for="">Email</label>
            <input name="email" type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" required>
          </div>
          <div class="mb-3">
            <label for="">Phone Number</label>
            <input name="phone" type="text" class="form-control form-control-lg" placeholder="Phone number" aria-label="Phone" required>
          </div>
          <div class="mb-3">
            <label for="">Message</label>
            <textarea name="message" class="form-control" id="" cols="20" rows="4" required></textarea>
          </div>
          <p>This site is protected by reCAPTCHA and the Google <a href=""> Policy </a>and <a href="">Terms of Service apply.</a></p>
          
        </div>
        <div class="modal-footer">
          <button type="submit" name="send" class="btn btn-primary">Submit</button>
          
        </div>
      </form>
    </div>
  </div>
</div>


  <?php
require_once('includes/footer.php');
?>