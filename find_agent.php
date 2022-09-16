<?php
 include('./includes/header.php');
 include('./admin/connect.php');

if (isset($_POST['send'])){
  

  // $name = mysqli_real_escape_string($con,$_POST['name']);
  // $email = mysqli_real_escape_string($con,$_POST['email']);
  // $phone =  mysqli_real_escape_string($con,$_POST['phone']);
  // $message =mysqli_real_escape_string($con, $_POST['message']);

  $name = mysqli_real_escape_string($con,$_POST['name']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $message = mysqli_real_escape_string($con,$_POST['message']);


  $sql = "INSERT INTO `agent`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";


        if (mysqli_query($con, $sql)) {
            echo '<script>alert("Message Sent Successfully.");window.location.assign("find_agent.php");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }  
  
      }






?>

      <section class="py-5 agent" style="background-color:rgb(229, 247, 241);">
        <div class="container ">
 
      <div class="row">
        <h1>Locate AttlasGroup Agents Around You</h1>
        <div class="d-flex align-items-center gap-2 mb-3">
          <i class="ph-envelope-simple"></i>
          <p class="mb-0 text-white">attlasgroup90@gmail.com</p>
        </div>
        <div class="d-flex align-items-center gap-2 mb-3">
          <i class="ph-phone-call"></i>
          <p class="mb-0 text-white">+1 (860) 946-0394</p>
        </div>
        <div>
          <a type="button" class="btn btn-dark rounded-pill btnsell w-35" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Contact Agent
          </a>
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

      <script>
        const contactForm = document.querySelector('#contactForm')
        const errorDiv = document.querySelector('.errorDiv')

        contactForm.addEventListener('submit', (e) => {
        e.preventDefault()
        formValidation( 
                        contactForm.name.value.trim(), 
                        contactForm.email.value.trim(), 
                        contactForm.phone.value.trim(), 
                        contactForm.message.value.trim()
                    )
    })

    function formValidation(name, email, phone, message){
        let errMsg;
        if(!name || !email || !phone || !message){
            errMsg = "Please fill in all fields"
            errorDiv.innerHTML = `<p class="bg-danger text-center text-light py-1">${errMsg}</p>`
        }

        setTimeout(() => {
            errorDiv.innerHTML = ""
        },5000)
    }
  </script>

<!-- footer -->
<?php
require_once('includes/footer.php');
?>

</body>
</html>