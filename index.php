<?php include('header.php'); ?>
<?php include('database/db.php'); ?>
<style>
    .rs-banner.style12{
        padding:0px;
    }
</style>
<div class="rs-slider style1">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slider-content slide1" style="background-size: contain;">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Foundation Courses</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"></h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide2" style="background-size: contain;">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Engineering Courses</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"></h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide3" style="background: url('assets/slider/doctor.jpg');background-size: contain;background-position: center;background-repeat: no-repeat;">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Neet Courses</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"></h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div id="rs-banner" class="rs-banner style12">
    <!-- Features Section start -->
    <div id="rs-features" class="rs-features style4 pt-50">
        <div class="container">
           <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="features-wrap">
                        <div class="icon-part">
                           <img src="assets/images/features/icon/3.png" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">
                                <span class="watermark">Online Courses</span>
                            </h4>
                            <p class="dese">
                               Enjoy a variety of fresh topics
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="features-wrap">
                        <div class="icon-part">
                           <img src="assets/images/features/icon/2.png" alt="">
                        </div>
                        <div class="content-part">
                          <h4 class="title">
                              <span class="watermark">Expert Instruction</span>
                          </h4>
                            <p class="dese">
                                Find the right instructor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="features-wrap">
                        <div class="icon-part">
                           <img src="assets/images/features/icon/1.png" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">
                                <span class="watermark">Lifetime access</span>
                            </h4>
                            <p class="dese">
                               Learn on your schedule
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Section End -->
    <br><br><br><br>
    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-last">
                    <div class="notice-bord style1">
                        <h4 class="title">Notice Board</h4>
                        <ul>
                            <?php
                            $sql5="SELECT * FROM notice ORDER BY id DESC LIMIT 5";
                            $run5=mysqli_query($con,$sql5);
                            if($run5==true){
                                while($row2=mysqli_fetch_assoc($run5)){
                                    ?>
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="date"><?php echo $row2['date1']; ?></div>
                                <div class="desc"><?php echo $row2['description']; ?></div>
                                  </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                 <?php
                 $sql6="SELECT * FROM about";
                 $run6=mysqli_query($con,$sql6);
                 if($run6==true){
                     while($row3=mysqli_fetch_assoc($run6)){
                         $title=$row3['title'];
                         $imgs=$row3['imgs'];
                         $description=$row3['description'];
                     }
                 }
                 ?>
                <div class="col-lg-8 pr-50 md-pr-15">
                    <div class="about-part">
                        <div class="sec-title mb-40">
                            <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">About Us</div>
                            <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"><?php echo $title;  ?></h2>
                            <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms"><?php echo $description; ?></div>
                        </div>
                        <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <div id="rs-categories" class="rs-categories home-style14 pt-10 pb-10 md-pt-70 md-pb-60">
        <div class="container">
            <div class="sec-title6 text-center mb-40">
                <div class="img-part mb-10">
                    <img src="assets/images/line.png" alt="">
                </div>
               <h2 class="title title2">Our Top Categories</h2>
            </div>
            <div class="row">
              <?php
              $sq="SELECT * FROM cource_categories ORDER BY id DESC";
              $runn=mysqli_query($con,$sq);
               if ($runn==true) {
                  while ($dd=mysqli_fetch_assoc($runn)) {
                    ?>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="categories-items">
                            <div class="cate-images">
                                <a href="#"><img src="admin/images/category/<?php echo $dd['imgs']; ?>" alt="" style="height: 300px;"></a>
                            </div>
                            <div class="contents">
                                <div class="img-part">
                                    <img src="admin/images/category/<?php echo $dd['imgs']; ?>" alt="" >
                                </div>
                                <div class="content-wrap">
                                    <h2 class="title"><a href="course_view.php?ccid=<?php echo $dd['id']; ?>"><?php echo $dd['title']; ?></a></h2>
                                    <span class="course-qnty"></span>
                                    <div class="btn2">
                                        <a href="course_view.php?ccid=<?php echo $dd['id']; ?>">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                  }
               }
              ?>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
       <div class="container">
           <div class="row y-middle mb-50 md-mb-30">
               <div class="col-md-6 sm-mb-30">
                   <div class="sec-title">
                       <div class="sub-title primary">Top Courses</div>
                       <h2 class="title mb-0">Popular Courses</h2>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="btn-part text-right sm-text-left">
                       <a href="course.php" class="readon">View All Courses</a>
                   </div>
               </div>
           </div>
           <div class="row">
             <?php
             $sw="SELECT * FROM course";
             $runm=mysqli_query($con,$sw);
             if ($runm==true) {
                while ($datad=mysqli_fetch_assoc($runm)) {
                      ?>
                      <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                          <div class="courses-item">
                              <div class="img-part">
                                  <img src="admin/images/course/<?php echo $datad['img']; ?>" style="height:240px" alt="">
                              </div>
                              <div class="content-part">
                                  <ul class="meta-part">
                                      <li><span class="price">
                                        <?php
                                        $ccate=$datad['course_cate'];
                                        $sqw="SELECT * FROM cource_categories WHERE id=$ccate";
                                        $runn=mysqli_query($con,$sqw);
                                        if ($runn==true) {
                                           while ($rrt=mysqli_fetch_assoc($runn)) {
                                              echo $rrt['title'];
                                           }
                                        }
                                        ?>

                                      </span></li>
                                      <li><a class="categorie" href="course-single.php?csid=<?php echo $datad['id']; ?>">
                                        <?php echo $datad['course_name']; ?>

                                      </a></li>
                                  </ul>
                                  <h3 class="title"><a href="course_view.php?ccid=<?php echo $datad['id']; ?>"></a>
                              <a href="course-single.php?csid=<?php echo $datad['id']; ?>"><button type="button" class="btn btn-primary" name="button" style="width: 100%">

                                <?php
                                $cdr=$datad['duration'];
                                $cdur=explode(",",$cdr);
                                $ccd=count($cdur);

                                $pp=$datad['price'];
                                $pri=explode(",",$pp);
                                for ($i=0; $i <$ccd ; $i++) {
                                  echo $cdur[$i] ." : ". $pri[$i]."<br>";
                                }
                                ?>
                              </button></a>

                                  </h3>
                                  <div class="bottom-part">
                                      <div class="info-meta">
                                          <ul>
                                              <li class="user"><i class="fa fa-user"></i></li>
                                              <li class="ratings">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="btn-part">
                                          <a href="course-single.php?csid=<?php echo $datad['id']; ?>"><i class="flaticon-right-arrow"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php
                }
             }
             ?>
           </div>
       </div>
    </div>
    <!-- Popular Courses Section End -->

    <!-- CTA Section Start -->
    <div class="rs-cta section-wrap gray-bg">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="img-part">
                      <img src="assets/images/cta/home1.jpg" alt="Image">
                </div>
            </div>
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <div class="content">
                    <div class="sec-title mb-40 ">
                        <h2 class="title">Admission Open for 2021</h2>
                        <div class="desc">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail in their duty through weakness. These cases are perfectly simple and easy every pleasure is to be welcomed and every pain avoided.</div>
                    </div>
                    <div class="btn-part">
                        <a class="readon banner-style uppercase" href="adminssion.php">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Faq Section Start -->
    <!--<div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-6 padding-0">-->
    <!--              <div class="main-part">-->
    <!--                <div class="title mb-40 md-mb-15">-->
    <!--                    <h2 class="text-part">Frequently Asked Questions</h2>-->
    <!--                </div>-->
    <!--                  <div class="faq-content">-->
    <!--                      <div id="accordion" class="accordion">-->
    <!--                         <div class="card">-->
    <!--                             <div class="card-header">-->
    <!--                                 <a class="card-link" data-toggle="collapse" href="#collapseOne">What are the requirements ?</a>-->
    <!--                             </div>-->
    <!--                             <div id="collapseOne" class="collapse show" data-parent="#accordion">-->
    <!--                                 <div class="card-body">-->
    <!--                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.-->
    <!--                                 </div>-->
    <!--                             </div>-->
    <!--                         </div>-->
    <!--                          <div class="card">-->
    <!--                              <div class="card-header">-->

    <!--                                  <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Does Educavo offer free courses?</a>-->
    <!--                              </div>-->
    <!--                              <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">-->
    <!--                                  <div class="card-body">-->
    <!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.-->
    <!--                                  </div>-->
    <!--                              </div>-->
    <!--                          </div>-->
    <!--                          <div class="card">-->
    <!--                              <div class="card-header">-->

    <!--                                  <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">What is the transfer application process?</a>-->
    <!--                              </div>-->
    <!--                              <div id="collapseThree" class="collapse" data-parent="#accordion" style="">-->
    <!--                                  <div class="card-body">-->
    <!--                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.-->
    <!--                                  </div>-->
    <!--                              </div>-->
    <!--                          </div>-->
    <!--                          <div class="card">-->
    <!--                              <div class="card-header">-->

    <!--                                  <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">What is distance education?</a>-->
    <!--                              </div>-->
    <!--                              <div id="collapsefour" class="collapse" data-parent="#accordion" style="">-->
    <!--                                  <div class="card-body">-->
    <!--                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.-->
    <!--                                  </div>-->
    <!--                              </div>-->
    <!--                          </div>-->
    <!--                      </div>-->
    <!--                  </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 padding-0">-->
    <!--                <div class="img-part media-icon">-->
    <!--                    <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">-->
    <!--                        <i class="fa fa-play"></i>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- faq Section Start -->

    <!-- Team Section Start -->
    <div id="rs-team" class="rs-team style1 gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
            <div class="sec-title mb-50 md-mb-30">
                <div class="sub-title primary">Instructor</div>
                <h2 class="title mb-0">Expert Teachers</h2>
            </div>
            <div class="rs-carousel owl-carousel nav-style2" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                <?php
                $sql="SELECT * FROM faculty";
                $run=mysqli_query($con,$sql);
                if ($run==true) {
                  while ($data=mysqli_fetch_assoc($run)) {
                        ?>
                        <div class="team-item">
                            <img src="admin/images/faculty/<?php echo $data['imgs']; ?>" style="height: 350px;" alt="">
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
    <div class="rs-testimonial home-style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title mb-50 md-mb-30 text-center">
                <div class="sub-title primary">Testimonial</div>
                <h2 class="title mb-0">What Students Saying</h2>
            </div>
            <div class="rs-carousel owl-carousel"
                data-loop="true"
                data-items="2"
                data-margin="30"
                data-autoplay="true"
                data-hoverpause="true"
                data-autoplay-timeout="5000"
                data-smart-speed="800"
                data-dots="true"
                data-nav="false"
                data-nav-speed="false"

                data-md-device="2"
                data-md-device-nav="false"
                data-md-device-dots="true"
                data-center-mode="false"

                data-ipad-device2="1"
                data-ipad-device-nav2="false"
                data-ipad-device-dots2="true"

                data-ipad-device="2"
                data-ipad-device-nav="false"
                data-ipad-device-dots="true"

                data-mobile-device="1"
                data-mobile-device-nav="false"
                data-mobile-device-dots="false">
                <?php
                 $sql4="SELECT * FROM testimonial";
                 $run4=mysqli_query($con,$sql4);
                 if ($run4==true) {
                   while ($ro=mysqli_fetch_assoc($run4)) {
                         ?>
                         <div class="testi-item">
                             <div class="author-desc">
                                 <div class="desc"><img class="quote" src="assets/images/testimonial/style5/quote2.png" alt=""><?php echo $ro['details']; ?></div>
                                 <div class="author-img">
                                     <img src="admin/images/testimonial/<?php echo $ro['imgs']; ?>" alt="">
                                 </div>
                             </div>
                             <div class="author-part">
                                 <a class="name" href="#" style="color: #000"><?php echo $ro['name']; ?></a>
                                 <span class="designation">Student</span>
                             </div>
                         </div>
                         <?php
                   }
                 }
                ?>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Section bg Wrap 2 start -->

    <!-- Section bg Wrap 2 End -->
</div>
<!-- Banner Section End -->
<?php include('footer.php'); ?>
