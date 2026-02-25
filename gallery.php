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
<!-- contact  -->
 <section class="contact-section">
  <div class="container text-center mb-5">
    <h2 class="contact-title">Contact with us</h2>
    <p class="contact-subtitle">Metronome Music And Arts Academy</p>
  </div>

  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT FORM -->
      <div class="col-lg-6 mb-4">
        <div class="contact-box">
          <h3>Let's Get In Touch</h3>

          <form>
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" placeholder="Name" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" placeholder="Phone" class="form-control">
              </div>
            </div>

            <div class="mb-3">
              <input type="text" placeholder="Address" class="form-control">
            </div>

            <div class="mb-3">
              <select class="form-control">
                <option>Services</option>
                <option>Guitar</option>
                <option>Piano</option>
                <option>Drums</option>
              </select>
            </div>

            <div class="mb-3">
              <textarea rows="4" placeholder="Message" class="form-control"></textarea>
            </div>

            <button class="btn send-btn">Send Message</button>
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