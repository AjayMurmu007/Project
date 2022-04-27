<?php include('header.php');
?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color padding">
        <h1 class="page-title white-color">Contact Us</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- Contact Section Start -->
<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
  <div class="container">
    <div class="row rs-contact-box mb-90 md-mb-50">
    <div class="col-lg-4 col-md-12-4 lg-pl-0 sm-mb-30 md-mb-30">
      <div class="address-item">
        <div class="icon-part">
          <img src="assets/images/contact/icon/1.png" alt="">
        </div>
        <div class="address-text">
                        <span class="label">Address</span>
                        <span class="des">Branch Office : Dhanbad</span>
                        <span class="des">Head Office : Shiv Mandir, Kankarbag Dhanbad-20</span>
                    </div>
      </div>
    </div>
            <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                <div class="address-item">
                    <div class="icon-part">
                        <img src="assets/images/contact/icon/2.png" alt="">
                    </div>
                    <div class="address-text">
                        <span class="label">Email Address</span>
                        <span class="des"><a href="mailto:example@gmail.com">info@abcgmail.com</a></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30">
                <div class="address-item">
                    <div class="icon-part">
                        <img src="assets/images/contact/icon/3.png" alt="">
                    </div>
                    <div class="address-text">
                        <span class="label">Phone Number</span>
                        <span class="des"><a href="tel%2b0885898745.html">7494114578 , 9798356894</a></span>
                    </div>
                </div>
            </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 md-mb-30">
        <!-- Map Section Start -->
                <div class="contact-map3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14467.47565647367!2d88.23666521981964!3d24.970574196052336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb06a5ecf57fad%3A0x2f7aa7f768daa8ed!2sKendua%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1640587881769!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
      </div>
      <div class="col-lg-6 pl-60 md-pl-15">
      <div class="contact-comment-box">
        <div class="inner-part">
                        <h2 class="title mb-mb-15">Get In Touch</h2>
                        <p>Have some suggestions or just want to say hi? Our  support team are ready to help you 24/7.</p>
                    </div>
              <div id="form-messages"></div>
    <form action="contact_action.php" method="post">
      <fieldset>
        <div class="row">
                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-12 mb-50">
                                    <textarea class="from-control" id="message" name="message" placeholder=" Message" required></textarea>
                                </div>
        </div>
        <div class="form-group mb-0">
          <input class="btn-send" type="submit" name="submit">
        </div>
      </fieldset>
    </form>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section End -->
<?php include('footer.php'); ?>
