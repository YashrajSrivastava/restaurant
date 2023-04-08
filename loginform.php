<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bamboo Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
  <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
      rel="stylesheet"/>
  
</head>

<Body>
  <!-- background="images/17.avif" -->


<?php include 'menu.php'; ?>

<section class="vh-90 " style="background-color: #9A616D; ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://img.freepik.com/free-photo/hot-sushi-rolls-green-leaf-with-ginger-wasabi_114579-3017.jpg?size=626&ext=jpg&ga=GA1.2.1775297495.1680377866&semt=ais"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Bamboo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login With Us</h5>

                  <div class="form-outline mb-4">
                    <input type="text" name="user" autocomplete="off" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">User</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" autocomplete="off" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button type="submit" name="login" class="btn btn-dark btn-lg btn-block" >Login</button>
                  </div>

                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signupform.php"
                      style="color: #393f81;">Register here</a></p>
                  <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a> -->
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MDB -->
<script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>



    <footer>
    <!-- <p class="p-3 bg-dark text-white text-center">@YashResturant</p> -->
    
      <p class="p-3 bg-dark text-white text-center">@YashResturant © Copyright 2023 </p>
        

      
  </footer>
</body>

</html>