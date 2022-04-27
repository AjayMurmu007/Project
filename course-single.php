<?php
session_start();
include('header.php');
?>
<?php
include('database/db.php');
$idd=$_GET['csid'];
$sql="SELECT * FROM course WHERE id=$idd";
$run=mysqli_query($con,$sql);
if ($run==true) {
   while ($data=mysqli_fetch_assoc($run)) {
         $course_cate=$data['course_cate'];
         $course_name=$data['course_name'];
         $duration=$data['duration'];
         $img=$data['img'];
         $video_url=$data['video_url'];
         $date1=$data['date1'];
         $price=$data['price'];
         $Description=$data['Description'];
   }
   $_SESSION["course_cate"] = $course_cate;
   $_SESSION["course_name"] = $course_name;
   $_SESSION["duration"] = $duration;
   $_SESSION["img"] = $img;
   $_SESSION["price"] = $price;
}
?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title"><?php echo $course_name; ?></h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>Course Details</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Intro Courses -->
<section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70" style="overflow:none">
    <div class="container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="col-lg-8 md-mb-50" >
                <!-- Intro Info Tabs-->
                <div class="intro-info-tabs">
                    <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                        <li class="nav-item tab-btns">
                            <a class="nav-link tab-btn active" id="prod-overview-tab" data-toggle="tab" href="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Overview</a>
                        </li>

                    </ul>
                    <div class="tab-content tabs-content" id="myTabContent" >
                        <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                            <div class="content white-bg pt-30">
                                <!-- Cource Overview -->
                                <div class="course-overview">
                                    <div class="inner-box" style="overflow: none">
                                        <h4><?php echo $course_name; ?></h4>
                                        <div class="row">
                                          <div class="col-md-12" style="overflow-x:scroll">
                                              <?php echo $Description; ?>
                                          </div>
                                        </div>
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
                    <div class="intro-video media-icon orange-color2">
                        <img class="video-img" src="admin/images/course/<?php echo $img; ?>" alt="Video Image">
                        <a class="popup-videos" href="<?php echo $video_url; ?>">
                            <i class="fa fa-play"></i>
                        </a>
                        <h4>Preview this course</h4>
                    </div>
                    <!-- End Video Box -->
                    <div class="course-features-info">
                        <ul>
                            <li class="duration-feature">
                                <i class="fa fa-clock-o"></i>
                                <span class="label">Duration / Price</span><br>
                                <?php
                               $cdur=$duration;
                               $carr=explode(",",$cdur);
                               $cc=count($carr);

                               $cprice=$price;
                               $parr=explode(",",$cprice);
                               $cp=count($parr);
                               for ($i=0; $i <$cc ; $i++) {
                                 ?>
                                 <span class="value" style="float: left"><?php echo $carr[$i]." :    "."<i class='fas fa-rupee-sign'></i>".$parr[$i]; ?></span><br>
                                 <?php
                               }
                                ?>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-part">
                        <a href="checkout.php" class="btn readon2 orange-transparent">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End intro Courses -->


<?php include('footer.php'); ?>
