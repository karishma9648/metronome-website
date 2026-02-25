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
<section class="contact-map-sec">

  <!-- CONTACT PART -->
  <div class="contact-map-container">

    <!-- LEFT -->
    <div class="cm-left">
      <h2>Contact Us</h2>
      <p class="cm-sub">Welcome to Metronome Music And Arts Academy</p>

      <div class="cm-item">
        <div class="cm-icon"><i class="fa fa-phone"></i></div>
        <div>
          <h4>Contact Us</h4>
          <p>+91 89602 29497 <br> +91 76180 08934</p>
        </div>
      </div>

      <div class="cm-item">
        <div class="cm-icon"><i class="fa fa-envelope"></i></div>
        <div>
          <h4>Mail Us</h4>
          <p>metronomeindia18@gmail.com</p>
        </div>
      </div>

      <div class="cm-item">
        <div class="cm-icon"><i class="fa fa-map-marker"></i></div>
        <div>
          <h4>Address</h4>
          <p>3/237 Vipul Khand, Gomti Nagar, Lucknow - 226010</p>
        </div>
      </div>

      <div class="cm-item">
        <div class="cm-icon"><i class="fa fa-map-marker"></i></div>
        <div>
          <h4>Branch Address</h4>
          <p>5/14 B Vinay Khand, Gomti Nagar</p>
        </div>
      </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="cm-right">
      <h2>Let's Get In Touch</h2>

      <form>
        <div class="cm-row">
          <input type="text" placeholder="Name">
          <input type="text" placeholder="Phone">
        </div>

        <div class="cm-row">
          <input type="text" placeholder="Address">
          <select>
            <option>Services</option>
          </select>
        </div>

        <textarea placeholder="Message"></textarea>

        <button>Send Message</button>
      </form>
    </div>

  </div>

  <!-- MAP -->
  <div class="cm-map">
    <iframe 
      src="https://www.google.com/maps?q=gomti+nagar+lucknow&output=embed"
      allowfullscreen="" loading="lazy">
    </iframe>
  </div>

</section>
   <!-- content section end -->
   <?php include 'footer.php'; ?>
</body>
</html>