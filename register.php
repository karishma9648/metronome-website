<?php include 'header.php'; ?>
<style>
.register-section {
  background: url('image/form_baner.webp') no-repeat center;
  background-size: cover;
  padding: 80px 0;
  position: relative;
}

/* LIGHT OVERLAY */
.register-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(255,255,255,0.8);
}

.register-section .container {
  position: relative;
  z-index: 2;
}


.register-title {
  font-size: 42px;
  font-weight: 700;
  margin-bottom: 10px;
}

.register-subtitle {
  color: #666;
  max-width: 600px;
  margin: auto;
  margin-bottom: 40px;
}


.register-box {
  background: #fff;
  padding: 40px;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  text-align: left;
  height: 90%;
}

/* INPUT */
.input-group-text {
  background: #eee;
}

.form-control {
  height: 45px;
}

/* BUTTON */
.custom-btn {
  background: linear-gradient(90deg, #ff7a18, #ff3b47);
  color: #fff;
  padding: 12px;
  border-radius: 10px;
  font-weight: 600;
  border: none;
  transition: 0.3s;
}

.custom-btn:hover {
  transform: translateY(-3px);
  color: #fff;
}
@media (max-width: 576px) {
  .dance-title {
    font-size: 24px;
  }

  .dance-text {
    font-size: 14px;
  }
}
@media (max-width: 768px) {

  .register-title {
    font-size: 28px;
  }

  .register-box {
    padding: 20px;
  }

  .custom-btn {
    margin-bottom: 10px;
  }
}
</style>

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

<?php include 'footer.php'; ?>