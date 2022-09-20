<?php 
require_once('./includes/header.php');


include('./admin/connect.php');

if (isset($_POST['apply'])){

  $name = mysqli_real_escape_string($con,$_POST['name']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $address = mysqli_real_escape_string($con,$_POST['address']);
  $zipcode = mysqli_real_escape_string($con,$_POST['zipcode']);
  $join_as = mysqli_real_escape_string($con,$_POST['join_as']);
  $gender = mysqli_real_escape_string($con,$_POST['gender']);
 

  $sql = "INSERT INTO `jobs`(`name`, `email`, `phone`, `address`, `zipcode`, `join_as`, `gender`) VALUES ('$name','$email','$phone','$address','$zipcode','$join_as','$gender')";


        if (mysqli_query($con, $sql)) {
            echo '<script>alert("Application Successfully.");window.location.assign("jobs.php");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }  
  
      }



?>
<section id="career">
      <div class="container apply">
        <div class="row  py-8">
          <h1>Want to Start a Career As an Agent?</h1>
          <!-- <p>Join Attlasgroup an extraordinary
            home for agents and brokers</p> -->

            <!-- Button trigger modal -->
            <a type="button" class="btn btn-dark rounded-pill btnstart w-50" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Get Started
          </a>
     </div>
    </div>
</section>
<section style="background-color: rgb(229, 247, 241);">
  <div class="container">
    <div class="row py-4">
      <div class="col-md-6">
       <img src="./img/agent1.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h4>Start a Career As an Agent?</h4>
        <div>
          <p>AttlasGroup agents work with clients to help them buy, sell or rent real estate, including office buildings and houses</p>
          <p>
            Though some of the responsibilities of a real estate agent change based on if they’re working with a buyer or a seller, the general duties of all AttlasGroup real estate agents include:
          </p>
          <ol>
            <li>Administrative function</li>
            <li>Research </li>
            <li>Marketing</li>
          </ol>
        </div>
        <div>
          <a type="button" class="btn btn-dark rounded-pill btnstart w-50" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Get Started
          </a>
        </div>
      </div>
    </div>
    <div class="row py-4">
      <div class="col-md-6">
        <h4>Start a Career As a Volunteer?</h4>
        <div>
          <p>Volunteering is an incredible way for real estate investors to give back to the community for good. It can aslo be very rewarding, both financially and mentally.
         Here are ways that you can volunteer at AttlasGroup, help your community, and help your business at the same time:</p>
         <ol>
          <li>Community Outreach</li>
          <li>Business Coaching</li>
          <li>Affordable Housing</li>
          <li>Collaborate with Reputable Charity Organisation</li>
         </ol>
         <div>
         <a type="button" class="btn btn-dark rounded-pill btnstart w-50" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Get Started
          </a>
         </div>

        </div>
      </div>
      <div class="col-md-6">
        <img src="./img/v3.jpg" alt="" class="">
       
      </div>
    </div>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Take a step in achieving your career goals</h5>
        <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">
       <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label  class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" required>
          </div>

          <div class="mb-3">
            <label  class="form-label">Location/Address</label>
            <input type="text" name="address" class="form-control" id="location" required>
          </div>
          <div class="mb-3">
            <label  class="form-label">Zipcode</label>
            <input type="text" name="zipcode" class="form-control" id="zipcode" required>
          </div>
          <div class="mb-3">
            <label  class="form-label">Join As</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="join_as" id="inlineRadio1" value="Agent" required />
              <label class="form-check-label" for="inlineRadio1">Agent</label>
            </div>

            <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="join_as" id="inlineRadio2" value="Volunteer"  required/>
              <label class="form-check-label" for="inlineRadio2">Volunteer</label>
            </div>
          </div>
          <div class="mb-3">
            <label  class="form-label">Gender</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required/>
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" required />
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
          </div>
       </div>
        <div class="modal-footer">
          <button type="submit" name="apply" class="btn btn-primary">Submit</button>
          
        </div>
      </form>
    </div>
  </div>
</div>

  <!--footer-->
  <?php 
require_once('./includes/footer.php');
?>
