<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include 'header-link.php'; ?>
</head>

<body>

  <?php
  include 'header.php';

  ?>

  <!-- Hero Slider -->
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="hero-slide slide1 d-flex align-items-center">
          <div class="container text-center text-lg-start">
            <div class="hero-content">
              <h1 class="hero-title">
                Welcome to
                <span class="gradient-text">Metronome Music</span><br>
                And Arts Academy
              </h1>
              <a href="#" class="btn btn-light rounded-pill px-4 mt-3">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="hero-slide slide2 d-flex align-items-center">
          <div class="container text-center text-lg-start">
            <div class="hero-content">
              <h1 class="hero-title">
                Welcome to
                <span class="gradient-text">Metronome Music</span><br>
                And Arts Academy
              </h1>
              <a href="#" class="btn btn-light rounded-pill px-4 mt-3">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="hero-slide slide3 d-flex align-items-center">
          <div class="container text-center text-lg-start">
            <div class="hero-content">
              <h1 class="hero-title">
                Welcome to
                <span class="gradient-text">Metronome Music</span><br>
                And Arts Academy
              </h1>
              <a href="#" class="btn btn-light rounded-pill px-4 mt-3">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>
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

          <!-- Red YouTube Play Button -->
          <button class="video-btn" data-bs-toggle="modal" data-bs-target="#videoModal">
            <i class="fa-brands fa-youtube"></i>
          </button>

        </div>


        <!-- VIDEO MODAL -->
        <div class="modal fade" id="videoModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark border-0">

              <div class="modal-body p-0">

                <button type="button" class="btn-close btn-close-white position-absolute end-0 m-3"
                  data-bs-dismiss="modal"></button>

                <div class="ratio ratio-16x9">
                  <iframe
                    src="https://www.youtube.com/embed/YOUR_VIDEO_ID"
                    title="YouTube video"
                    allowfullscreen>
                  </iframe>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- instruments  -->
  <section class="instruments-section py-5">
    <div class="container text-center">

      <!-- Heading -->
      <h2 class="fw-bold">Instruments</h2>
      <p class="text-muted mb-5">
        A little about the instruments at play at Metronome Music <br>
        And Arts Academy
      </p>

      <!-- Cards Row -->
      <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/metro2.webp" class="card-img-top" alt="Piano">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Piano</h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/metro4.webp" class="card-img-top" alt="Guitar">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Guitar</h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/metro_3.webp" class="card-img-top" alt="Drums">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Drums</h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>


        <!-- Card 4 -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/flute.webp" class="card-img-top" alt="Violin">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Piano</h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/v_l.webp" class="card-img-top" alt="Violin">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Violin</h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/dlk.webp" class="card-img-top" alt="">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Drums</h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>
        <!-- Card 7 -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/tbla.webp" class="card-img-top" alt="">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Tabla
              </h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>
        <!-- Card 8 -->

        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/ukle.webp" class="card-img-top" alt="">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Ukulele</h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>
        <!-- Card 9 -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card instrument-card h-100">
            <img src="image/hrmn.webp" class="card-img-top" alt="">
            <div class="card-body d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Harmonium</h5>
              <a href="#" class="btn btn-orange">Know more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- booking session -->
  <section class="cta-section">
    <div class="container">
      <div class="row align-items-center text-center text-lg-start">

        <!-- Left Content -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="cta-title">
            Need a <span class="gradient-text">EXPERT</span> trainer..?
          </h2>

          <p class="cta-desc">
            We deliver the very best service and amenities signed artists and independent musicians.
          </p>
        </div>

        <!-- Right Content -->
        <div class="col-lg-5 text-center text-lg-end">
          <a href="#" class="cta-btn">
            <i class="fa-solid fa-phone me-2"></i> book session now
          </a>

          <p class="cta-offer mt-3">
            And get a one recording hour for <span>FREE*</span>
          </p>
        </div>

      </div>
    </div>
  </section>
  <!-- contact  -->
  <section class="band-section">
    <div class="container">

      <!-- TOP HEADING -->
      <h1 class="band-heading text-center mb-5">
        Book Live Concert/Event
      </h1>

      <div class="row align-items-center">

        <!-- LEFT FORM -->
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="band-form">
            <h3 class="text-center mb-3">The Band</h3>

            <form method="POST">
              <input type="text" name="b_name" class="form-control mb-3" placeholder="Name">
              <input type="email" name="b_email" class="form-control mb-3" placeholder="Email">

              <select name="b_service" class="form-control mb-3">
                <option>Services</option>
                <option>Piano</option>
                <option>Guitar</option>
                <option>Drums</option>
              </select>

              <input type="date" name="b_date" class="form-control mb-3">

              <textarea name="b_message" class="form-control mb-3" rows="4" placeholder="Message"></textarea>

              <button name="band_submit" class="btn send-btn w-100">Send Message</button>
            </form>
          </div>

          <p class="band-text mt-4">
            The Metronome is the supportive of musicians who understand that the best art comes from the best environment.
            The Metronome is the supportive of musicians who understand that the best art comes from the best environment.
          </p>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="col-lg-7 text-center">
          <img src="image/theband.webp" class="img-fluid band-img" alt="">
        </div>

      </div>
    </div>
  </section>
  <!-- faculty -->
  <section class="faculty-section">
    <div class="container">

      <!-- HEADING -->
      <div class="text-center mb-5">
        <h1 class="faculty-title">Metronome Faculty</h1>
        <p class="faculty-subtitle">
          Faculty of Metronome Music And Arts Academy
        </p>
      </div>

      <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-lg-3 col-md-6">
          <div class="faculty-card text-center">
            <img src="image/sir_1.webp" class="faculty-img" alt="">
            <h4>Neeraj Sir</h4>
            <p>(Guitar, Piano, Ukulele)</p>

            <div class="social-icons">
              <i class="fab fa-instagram"></i>
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
            </div>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-lg-3 col-md-6">
          <div class="faculty-card text-center">
            <img src="image/sir_2.webp" class="faculty-img" alt="">
            <h4>Rahul Sir</h4>
            <p>(Dance, Piano, Drum)</p>

            <div class="social-icons">
              <i class="fab fa-instagram"></i>
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
            </div>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-lg-3 col-md-6">
          <div class="faculty-card text-center">
            <img src="image/sir_3.webp" class="faculty-img" alt="">
            <h4>Abhishek Sir</h4>
            <p>(Indian, Classical, Western)</p>

            <div class="social-icons">
              <i class="fab fa-instagram"></i>
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
            </div>
          </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-lg-3 col-md-6">
          <div class="faculty-card text-center">
            <img src="image/sir_4.webp" class="faculty-img" alt="">
            <h4>Rahul Sir</h4>
            <p>(Bass Guitar, Guitar teacher)</p>

            <div class="social-icons">
              <i class="fab fa-instagram"></i>
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- expert -->
  <section class="trainer-section">
    <div class="container">
      <div class="row align-items-center">

        <!-- LEFT IMAGE -->
        <div class="col-lg-4 mb-4">
          <div class="trainer-card">
            <img src="image/neeraj.webp" class="img-fluid" alt="">
            <div class="trainer-caption">
              <h6>METRONOME MUSIC AND ARTS ACADEMY</h6>
              <p>Lucknow</p>
            </div>
          </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-lg-8 text-white">

          <h2 class="trainer-title">
            Want to learn from expert Neeraj Sir
          </h2>

          <p class="trainer-text">
            Neeraj (born july 27, 1994) is an ace Lead Guitarist, Performer and Guitar teacher.
            He is also known as being the founder of Metronome Music And Arts Academy.
            Neeraj has performed at the topmost venues and with the best Rock bands over a career
            spanning 10 years so far.
          </p>

          <!-- LOGOS -->
          <div class="logo-row">
            <img src="image/trinity.webp">
            <img src="image/rock.webp">
            <img src="image/prayag.gif" style="height: 160px;">
            <img src="image/absrm.webp" style="height: 160px;">
          </div>

          <!-- SOCIAL + BUTTON -->
          <div class="trainer-actions">
            <div class="social-icons" style="color: #fff;">
              <i class="fab fa-instagram" style="font-size: 14px; margin-left: 300px;"></i>
              <i class="fab fa-facebook-f" style="font-size: 14px;"></i>
              <i class="fab fa-youtube" style="font-size: 14px;"></i>
            </div>

            <a href="#" class="btn read-btn">Read More</a>
          </div>

        </div>

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

            <form method="POST"> >
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

              <button name="contact_submit" class="btn send-btn">Send Message</button>
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
  <?php include 'footer.php'; ?>
</body>

</html>