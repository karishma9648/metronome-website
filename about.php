
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
    <section class="about-banner">
  <div class="overlay"></div>

  <div class="banner-content">
    <h1>About Us</h1>
    <p>Home \\ About Us</p>
  </div>
</section>
<!-- about section -->
 <section class="about-section py-5 ">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-3">
          Welcome to Metronome Academy
          <span class="title-line"></span>
        </h2>

        <p class="lead text-muted">
          The Metronome is the supportive of musicians who understand that 
          the best art comes from the best environment.
        </p>

        <p class="text-muted" style="color: #161414;">
          Metronome Music And Arts Academy was formed in 2012 with a vision 
          to spread quality music education across India. The aim is not only 
          to help students develop a lifelong appreciation for music but to 
          provide them with musical knowledge and experience that would truly 
          enable them to achieve their musical aspirations.
        </p>
      </div>

      
      <!-- ABOUT SECTION RIGHT SIDE -->
<div class="col-lg-6 text-center position-relative">

  <img src="image/text-block-video-1.webp" class="img-fluid  about-img" alt="About">
</div>
</div>
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


<!-- CONTACT -->
<section class="contact-section">
  <div class="container">
    <h2 class="text-center text-white fw-bold mb-5">Contact Us 🎶</h2>

    <div class="row justify-content-center">

      <!-- Contact Form -->
      <div class="col-lg-6">
        <div class="contact-card">

          <h5 class="fw-bold mb-4">Send Message</h5>

          <form>
            <input type="text" class="form-control mb-3" placeholder="Your Name" required>
            <input type="email" class="form-control mb-3" placeholder="Your Email" required>
            <input type="tel" class="form-control mb-3" placeholder="Your Phone" required>
            <textarea class="form-control mb-3" rows="4" placeholder="Your Message"></textarea>

            <button class="btn btn-warning w-100 btn-custom">Send Message</button>
          </form>

        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="contact-card">

          <h5 class="fw-bold mb-4">Get in Touch</h5>

          <p><i class="fa-solid fa-location-dot icon-box"></i> Lucknow, Uttar Pradesh</p>
          <p><i class="fa-solid fa-phone icon-box"></i> +91 89602 29497</p>
          <p><i class="fa-brands fa-whatsapp icon-box"></i> +91 89602 29497</p>
          <p><i class="fa-solid fa-envelope icon-box"></i> metronomeindia18@gmail.com</p>

          <a href="https://wa.me/918960229497" class="btn btn-success w-100 mt-3">
            Chat on WhatsApp
          </a>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- MAP BELOW -->
<section class="map-section py-5">
  <div class="container">
    <h3 class="text-center fw-bold mb-4">Find Us on Map 📍</h3>

    <iframe src="https://www.google.com/maps?q=Lucknow&output=embed"></iframe>
  </div>
</section>
<?php include 'footer.php'; ?>