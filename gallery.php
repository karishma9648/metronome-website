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
    <h1>Gallery</h1>
    <p>Home \\ Gallery</p>
  </div>
</section>
<section class="gallery-section">
  <div class="container-fluid p-0">

    <div class="row g-3">

      <!-- IMAGE ITEM -->
      <div class="col-lg-3 col-md-6 col-12">
        <div class="gallery-item">
          <img src="image/work.webp" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="gallery-item">
          <img src="image/metro_6.webp" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="gallery-item">
          <img src="image/metro_2.webp" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="gallery-item">
          <img src="image/metro_11.webp" alt="">
        </div>
      </div>

      <!-- SECOND ROW -->
      <div class="col-lg-3 col-md-6 col-12">
        <div class="gallery-item">
          <img src="image/metro_5.webp" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="gallery-item">
          <img src="image/metro1.webp" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="gallery-item">
          <img src="image/metro_8.webp" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="gallery-item">
          <img src="image/metro_10.webp" alt="">
        </div>
      </div>

    </div>

  </div>
</section>

<section class="video-section">
    <div class="video-container">

        <!-- Video 1 -->
        <div class="video-box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fxgXiuIgOrA?si=fuVDFTB5bgYXqnM_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Video 2 -->
        <div class="video-box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/a1U-RWFVytc?si=L56t68lL9EBNfSAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Video 3 -->
        <div class="video-box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h-W8e3KqzBs?si=7IYoKkQvuk_t1NWq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Video 4 -->
        <div class="video-box">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/3EuoBtTymSk?si=9E6Hxx2x_ci99BOL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
   <!-- content section end -->
   <?php include 'footer.php'; ?>
</body>
</html>