<?php 
include('./includes/header.php');
include('./admin/connect.php');

if (isset($_POST['send']))
{
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $location = mysqli_real_escape_string($con,$_POST['location']);
  $price = mysqli_real_escape_string($con,$_POST['price']);
  $details = mysqli_real_escape_string($con,$_POST['details']);
  


  
  $sql2= "INSERT INTO `users`(`email`, `phone`, `location`, `price`, `details`) VALUES ('$email','$phone','$location','$price','$details')";


      if ( mysqli_query($con, $sql2)) {
          echo '<script>alert(" Successfully Sent.");window.location.assign("sell.php");</script>';
      } else {
          echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
      }
  }


?>

   
  <section class= "sell">
    <div class="container">
      <div class="row">
        <h1>"Looking to Sell Your House?"</h1>
        <div class="row">
          <div class="col-md-8">
            <p class="text-white  mt-2">
              Your home is a huge part of your life, both financially and emotionally. So the decision to sell a house is not one to be made lightly. You need to determine a marketing strategy. 
              </p>
              <!-- <p class="text-white  mt-2">Price the house to attract buyer interest. There are a million other details to sort out.
              Partner with your local agent. You can depend on AttlasGroup to guide you through your house selling process with confidence.
            </p> -->
        </div>
        <div>
          <a type="button" class="btn btn-dark rounded-pill btnsell w-35" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Contact Agent
          </a>
        </div>
      </div>
    </div>
  </section>
  <section  style="background-color: rgb(229, 247, 241);" class="">
    <div class="container ">
      <div class="row">
        <div class="col-md-6 mt-5">
          <h3>Asking Why You Should Sell Your House?</h3>
          <p>
            Are you asking yourself, "When should I sell my house?" Good question. Timing is everything when it comes to selling your house. Luckily, Coldwell Banker has the information you need to sell your house with confidence.
          </p>

            <p class="mt-5"> 
              With our helpful articles on the selling process to learn more about the current state of the housing market and read testimonials from other home sellers on their experiences. With AttlasGroup as your partner, you'll always know when it's the right time to make your move.
            </p>
        </div>
        <div class="col-md-6 mt-5">
          <h3>Are You Preparing to Sell Your House?</h3>
          <p>
            Now that you've made the decision to sell your house, your trusted agent will help you put your best foot forward when preparing to sell your home. Your agent can walk you through the appraisal, give you tips on staging your home, and advise you on doing renovations or making any necessary repairs
          </p>

            <p> 
              Price the house to attract buyer interest. There are a million other details to sort out.
              Partner with your local agent. You can depend on AttlasGroup to guide you through your house selling process with confidence.
              With AttlasGroup as your guide, you'll be armed with the crucial information you need to attract buyers and get the best price possible.
            </p>
        </div>
        
      </div>
    </div>
  </section>

  <!--sell Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Agent</h5>
        <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <form method="post" action="sell.php">
       <div class="modal-body">
        <p class="mb-0">Enter details of the house</p>
          <div class="mb-1">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" required>
          </div>
          <div class="mb-1">
            <label for="">Phone Number</label>
            <input type="text" name="phone" class="form-control form-control-lg" placeholder="Phonenumber" aria-label="phone" required>
          </div>
          <div class="mb-1">
            <label for="">Location</label>
            <input type="text" name="location" class="form-control" placeholder="Las Vegas,NV" required>
          </div>
          <div class="mb-1">
            <label for="">Price</label>
            <select name="price" id="" class="form-control form-select " placeholder="MIN-Price-MAX-price">
              <option value="price1" required>$10,000-$50,000</option>
              <option value="price2" required>$100,000-$150,000</option>
            </select>
          </div>
          <div class="mb-1">
            <label for="">More Details</label>
            <textarea name="details" class="form-control" cols="30" rows="4" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="send" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
        
      </div>
      </form>
    </div>
  </div>
</div>

  <!--footer-->
<?php 
require_once('./includes/footer.php');
?>