<?php
include 'header.php';
?>

<section id="hero1" style="background-image: url('assets/img/graphic.jpg'); height: 250px;">
  <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
    <h1 style="text-align: center; padding-top: 150px; color: white;"></h1>
</section>


<div style="padding-top: 60px;">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16465.262797571337!2d77.06861931278792!3d28.643373070641903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2901fbd77863a657%3A0xd19eaf1a28c5187a!2sAleczo%20Media%20Pvt.Ltd!5e0!3m2!1sen!2sin!4v1701002204283!5m2!1sen!2sin"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade "></iframe>
</div>
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class=" section-title">
      <h2>Contact</h2>
      <p>Contact Us</p>
    </div>

    <div class="row">

      <div class="col-lg-6">

        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>office No 204,Gupta Plaza <br>
                M block, M5, Vikaspuri,Delhi,110018</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>aleczomedia@gmail.com<br></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>8887837198,<br>7710957998</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section>





<?php
include 'footer.php';
?>