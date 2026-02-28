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
    <?php if(isset($_GET['success'])): ?>
    <p style="color:green;">Message Sent Successfully ✅</p>
<?php endif; ?>

<?php if(isset($_GET['error'])): ?>
    <p style="color:red;">Failed to send message ❌</p>
<?php endif; ?>
<!-- CONTACT -->
<section class="contact-section">
  <div class="container">
    <h2 class="text-center text-white fw-bold mb-5">Contact Us 🎶</h2>

    <div class="row justify-content-center">

      <!-- Contact Form -->
      <div class="col-lg-6">
        <div class="contact-card">

          <h5 class="fw-bold mb-4">Send Message</h5>

  
<form action="send.php" method="POST">
            <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>
            <input type="tel" name="phone" class="form-control mb-3" placeholder="Your Phone" required>
            <textarea name="message" class="form-control mb-3" rows="4" placeholder="Your Message"></textarea>

            <button class="btn btn-warning w-100 btn-custom" type="submit">Send Message</button>
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