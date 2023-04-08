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
</head>

<Body>
  <!-- background="images/17.avif" -->

  <?php include 'menu.php'; ?>
  
    <style>
      body {
        background-image: url('images/20.avif');
        background-repeat: no-repeat;
        background-size: cover;
        
       }
    </style>
    <section class="my-5 ">
      <div class="py-5">
        <h2 class="text-center display-3 text-dark">
          Contact Us
        </h2>
      </div>
      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
          <div class="form-group py-2">
            <label for="">Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control">

          </div>
          <div class="form-group py-2">
            <label for="">Email Id</label>
            <input type="text" name="email" autocomplete="off" class="form-control">

          </div>
          <div class="form-group py-2">
            <label for="">Mobile No. </label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">

          </div>
          <div class="form-group py-2">
            <label for="">Pin Code </label>
            <input type="text" name="pincode" class="form-control">

          </div>
          <div class="form-group  py-2">
            <label>Comments</label>
            <textarea name="comments" id="" class="form-control"></textarea>

          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary  w-25 m-2">Submit</button>
          </div>
        </form>
      </div>
    </section>




    <bottom>
      <p class="p-3 bg-dark text-white text-center">@YashResturant</p>
    </bottom>
  
</body>

</html>