<?php include('header.php'); ?>
<?php include('database/db.php'); ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text">
        <h1 class="page-title">Courses</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>Course</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- Popular Course Section Start -->
<div class="rs-popular-courses style1 course-view-style orange-color rs-inner-blog white-bg pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-last">
                <div class="widget-area">
                    <div class="widget-archives mb-50">
                        <h3 class="widget-title">Courses</h3>
                        <ul class="categories">
                            <?php
                            $idd=$_GET['ccid'];
                            $sql="SELECT * FROM cource_categories";
                            $run=mysqli_query($con,$sql);
                            if($run==true){
                                while($row=mysqli_fetch_assoc($run)){
                                    ?>
                                    <li><a href="course_view.php?ccid=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pr-50 md-pr-15">
                <div class="course-search-part">
                    <div class="course-view-part">
                        <div class="view-icons">
                            <a href="#" class="view-grid mr-10"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="view-list"><i class="fa fa-list-ul"></i></a>
                        </div>
                        <!--<div class="view-text">Showing 1-9 of 11 results</div>-->
                    </div>
                    <div class="type-form">

                    </div>
                </div>
                <div class="course-part clearfix">
                    <?php
                    $iddd=$_GET['ccid'];
                     $sql2="SELECT * FROM course WHERE course_cate=$iddd";
                     $run2=mysqli_query($con,$sql2);
                     if($run2==true){
                         while($row2=mysqli_fetch_assoc($run2)){
                             ?>
                             <div class="courses-item">
                        <div class="img-part">
                            <img src="admin/images/course/<?php echo $row2['img']; ?>" style="height:240px" alt="">
                        </div>
                        <div class="content-part">
                            <ul class="meta-part">
                                <li><span class="price">
                                  <?php
                                  $ccate=$row2['course_cate'];
                                  $sqw="SELECT * FROM cource_categories WHERE id=$ccate";
                                  $runn=mysqli_query($con,$sqw);
                                  if ($runn==true) {
                                     while ($rrt=mysqli_fetch_assoc($runn)) {
                                        echo $rrt['title'];
                                     }
                                  }

                                ?>
                              </span></li>
                                <li><a class="categorie" href="course-single.php?csid=<?php echo $row2['id']; ?>"><?php echo $row2['course_name']; ?></a></li>
                            </ul>
                            <h3 class="title"><a href="course_view.php?ccid=<?php echo $row2['id']; ?>"></a>
                        <a href="course-single.php?csid=<?php echo $row2['id']; ?>"><button type="button" class="btn btn-primary" name="button" style="width: 100%">
                          <?php
                          $cdr=$row2['duration'];
                          $cdur=explode(",",$cdr);
                          $ccd=count($cdur);

                          $pp=$row2['price'];
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
                                    <a href="course-single.php?csid=<?php echo $row2['id']; ?>"><i class="flaticon-right-arrow"></i></a>
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
    </div>
</div>
<!-- Popular Course Section End -->
<?php include('footer.php'); ?>
