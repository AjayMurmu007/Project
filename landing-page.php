<?php include('header.php'); 
      include('database/db.php');
      $sql="SELECT * FROM scholorship";
      $run=mysqli_query($con,$sql);
      if($run==true){
          while($data=mysqli_fetch_assoc($run)){
               $id=$data['id'];
               $title=$data['title'];
               $fee=$data['fee'];
               $imgs=$data['imgs'];
               $video_url=$data['video_url'];
               $date1=$data['date1'];
               $ldescription=$data['ldescription'];
               $sdescription=$data['sdescription'];
          }
      }
?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title"><?php echo $title; ?></h1>
        <ul>
            <li>100% FREE PREPARATION FOR
IIT/JEE/NEET/AIIMS FOUNDATION CLASSES</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Intro Courses -->
<section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
    <div class="container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="col-lg-8 md-mb-50">
                <!-- Intro Info Tabs-->
                <div class="intro-info-tabs">
                    <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                        <li class="nav-item tab-btns" style="width: 340px;">
                            <a class="nav-link tab-btn active" id="prod-overview-tab" data-toggle="tab" href="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Who Can Apply?</a>
                        </li>

                    </ul>
                    <div class="tab-content tabs-content" id="myTabContent">
                        <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                            <div class="content white-bg pt-30">
                                <!-- Cource Overview -->
                                <div class="course-overview">
                                    <div class="inner-box">
                                       <?php echo $ldescription; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>

            <!-- Video Column -->
            <div class="video-column col-lg-4">
                <div class="inner-column">
                <!-- Video Box -->
                    <div class="intro-video media-icon">
                        <img class="video-img" src="admin/images/scholarship/<?php echo $imgs; ?>" alt="Video Image">
                        </a>
                        <!-- <h4>Preview this course</h4> -->
                    </div>
                    <!-- End Video Box -->
                    <div class="course-features-info">
                     <?php echo $sdescription; ?>
                    </div>

                    <div class="btn-part">
                        <a href="#" class="btn readon2 orange"><?php echo $fee; ?>/-</a>
                        <a href="application-form.php" class="btn readon2 orange-transparent">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End intro Courses -->
<?php include('footer.php'); ?>
