<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'header-link.php'; ?>
</head>
<body>
   <?php include 'header.php'; ?> 
   <!-- content sections start -->
<section class="register-section">
  <div class="container text-center">

    <h2 class="register-title">Register With Us</h2>
    <p class="register-subtitle">
      You are just one step behind to join the Metronome. I promise
      you to give my best if you will be a part of Metronome.
    </p>

    <div class="register-box">
      <form>
        <div class="row">

          <!-- LEFT -->
          <div class="col-md-6">
            <label>Name :</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Username">
            </div>

            <label>Location :</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-building"></i></span>
              <input type="text" class="form-control">
            </div>

            <label>Email Id :</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              <input type="email" class="form-control" placeholder="Email Id">
            </div>
          </div>

          <!-- RIGHT -->
          <div class="col-md-6">
            <label>Apply For :</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-pencil"></i></span>
              <input type="text" class="form-control" placeholder="Services">
            </div>

            <label>Contact No :</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-phone"></i></span>
              <input type="text" class="form-control" placeholder="Mobile No">
            </div>
          </div>

        </div>

        <!-- BUTTONS -->
        <div class="row mt-3">
          <div class="col-md-6">
            <button class="btn custom-btn w-100">Send Message</button>
          </div>
          <div class="col-md-6">
            <button class="btn custom-btn w-100">Download form</button>
          </div>
        </div>

      </form>
    </div>

  </div>
</section>
   <!-- content section end -->
   <?php include 'footer.php'; ?>
</body>
</html>


