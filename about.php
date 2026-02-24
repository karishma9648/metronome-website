<?php
include 'db.php';
include 'header.php';

if(isset($_POST['contact_submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact(name, phone, address, service, message)
              VALUES('$name','$phone','$address','$service','$message')";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
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
          <img src="image/prayag.gif" style="height: 160px;" >
          <img src="image/absrm.webp" style="height: 160px;">
        </div>

        <!-- SOCIAL + BUTTON -->
        <div class="trainer-actions">
          <div class="social-icons" style="color: #fff;">
            <i class="fab fa-instagram" style="font-size: 14px; margin-left: 300px;" ></i>
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
<?php include 'footer.php'; ?>