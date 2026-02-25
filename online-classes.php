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
<section class="about-banner">
  <div class="overlay"></div>

  <div class="banner-content">
    <h1>Online Music Classes</h1>
    <p>Home \\ Online Music Classes</p>
  </div>
</section>
<section class="classes-section py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT IMAGE -->
      <div class="col-lg-3 col-md-4 text-center mb-4 mb-lg-0">
        <img src="image/Classical.webp" class="img-fluid dance-img" alt="">
      </div>

      <!-- DANCE CONTENT -->
      <div class="col-lg-3 col-md-8 mb-4 mb-lg-0">
        <h3 class="fw-bold class-title">Dance Classes</h3>
        <p class="class-text">
          Western Dance, Classical, Bollywood Dance, Indian Folk Dance, 
          Hip Hop, Contemporary dance, Salsa Dance, Jazz dance, 
          B-Boying (breaking), Belly Dance....................
        </p>
        <button class="btn know-btn">Know more</button>
        <div class="line-gradient"></div>
      </div>

      <!-- MUSIC IMAGE -->
      <div class="col-lg-3 col-md-4 text-center mb-4 mb-lg-0">
        <img src="image/singing.webp" class="img-fluid music-img" alt="">
      </div>

      <!-- MUSIC CONTENT -->
      <div class="col-lg-3 col-md-8">
        <h3 class="fw-bold class-title">Music Classes</h3>
        <p class="class-text">
          Piano Classes, Guitar Classes, Drums, Indian Classical Singing, 
          Tabla Classes, Ukulele Classes, Western Classical Singing, 
          Flute Classes, Harmonium Classes............
        </p>
        <button class="btn know-btn">Know more</button>
        <div class="line-gradient"></div>
      </div>

    </div>
  </div>
</section>
<section class="contact-section">
  <div class="container text-center mb-5">
    <h2 class="contact-title">Booking a trial</h2>
    <p class="contact-subtitle">Metronome Music And Arts Academy</p>
  </div>

  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT FORM -->
      <div class="col-lg-6 mb-4">
        <div class="contact-box">
          <h3>Let's Get In Touch</h3>

          <form method="POST"> 
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" name="name" placeholder="Name" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" name="phone" placeholder="Phone" class="form-control">
              </div>
            </div>

            <div class="mb-3">
              <input type="text" name="address" placeholder="Address" class="form-control">
            </div>

            <div class="mb-3">
              <select name="service" class="form-control">
                <option>Services</option>
                <option>Guitar</option>
                <option>Piano</option>
                <option>Drums</option>
              </select>
            </div>

            <div class="mb-3">
              <textarea rows="4" name="message" placeholder="Message" class="form-control"></textarea>
            </div>

            <button name="contact_submit" class="btn send-btn">Book a trial</button>
          </form>
        </div>
      </div>

      <!-- RIGHT MAP -->
      <div class="col-lg-6">
        <div class="map-box">
          <iframe 
            src="https://maps.google.com/maps?q=lucknow&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="400" style="border:0;" allowfullscreen>
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

   <!-- content section end -->
   <?php include 'footer.php'; ?>
</body>
</html>

