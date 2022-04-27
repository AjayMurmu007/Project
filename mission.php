<?php include('header.php'); ?>
<?php include('database/db.php'); ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">Mission & Vision</h1>
        <ul>
          <li>
            <a class="active" href="index.php">Home</a>
          </li>
          <li>VISION & MISSION</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- About Section Start -->
<?php
$sql="SELECT * FROM missionandvision";
$run=mysqli_query($con,$sql);
if ($run==true) {
  while ($data=mysqli_fetch_assoc($run)) {
        $title=$data['title'];
        $imgs=$data['imgs'];
        $description=$data['description'];
  }
}
?>
<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
        <div class="img-part">
          <img class="" src="admin/images/missionandvission/<?php echo $imgs; ?>" alt="About Image">
        </div>
      </div>
      <div class="col-lg-6 pr-70 md-pr-15">
        <div class="sec-title">
          <div class="sub-title orange">VISION & MISSION</div>
          <h2 class="title mb-17">“<?php echo $title; ?>”</h2>
          <div class="bold-text mb-22">
          <?php
           echo $description;
          ?>
          </div>
           </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section End -->
<!-- Team Section Start -->
<div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg">
  <div class="container">
    <div class="sec-title mb-50 md-mb-30">
        <div class="sub-title orange">Instructor</div>
        <h2 class="title mb-0">Expert Teachers</h2>
    </div>
    <div class="rs-carousel owl-carousel nav-style2 orange-color" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
      <?php
      $sql="SELECT * FROM faculty";
      $run=mysqli_query($con,$sql);
      if ($run==true) {
        while ($data=mysqli_fetch_assoc($run)) {
              ?>
              <div class="team-item">
                  <img src="admin/images/faculty/<?php echo $data['imgs']; ?>" style="height: 350px" alt="">
                  <div class="content-part">
                      <h4 class="name"><a href="#"><?php echo $data['name']; ?></a></h4>
                      <span class="designation">Professor</span>
                      <ul class="social-links">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                  </div>
              </div>
              <?php
        }
      }
      ?>
    </div>
  </div>
</div>
<!-- Team Section End -->
<!-- Testimonial Section Start -->
<!-- Partner Start -->
<?php include('footer.php'); ?>
