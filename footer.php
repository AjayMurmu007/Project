</div>
<!-- Main content End -->
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="site-map">
                      <?php
                       include('database/db.php');
                       $sw="SELECT * FROM cource_categories";
                       $ru=mysqli_query($con,$sw);
                       if ($ru==true) {
                         while ($dg=mysqli_fetch_assoc($ru)) {
                           ?>
                           <li><a href="course_view.php?ccid=<?php echo $dg['id']; ?>"><?php echo $dg['title']; ?></a></li>
                           <?php
                         }
                       }
                      ?>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h4 class="widget-title">Courses</h4>
                    <ul class="site-map">
                      <?php
                     $sf="SELECT * FROM course";
                     $rt=mysqli_query($con,$sf);
                     if ($rt==true) {
                         while ($rg=mysqli_fetch_assoc($rt)) {
                               ?>
                               <li><a href="course-single.php?csid=<?php echo $rg['id']; ?>"><?php echo $rg['course_name']; ?></a></li>
                               <?php
                         }
                     }
                      ?>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                    <h4 class="widget-title">Address</h4>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">Branch & Office : The Landmark Saraidhela,Dhanbad
                            <br>
                            Head Office : Shiv Mandir, Kankarbag,Dhanabad-20
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:7494111111">7494114578</a> ,
                                <a href="tel:1234567890">9798356894</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:infoname@gmail.com">infoname@gmail.com</a> ,
                                <!-- <a href="#">classes.com</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-4 md-mb-20">
                    <div class="footer-logo md-text-center">
                        <a href="index.html"><img src="assets/images/logo-light2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-20">
                    <div class="copyright text-center md-text-left">
                        <p>&copy; 2021 All Rights Reserved. Developed By <a href="#">Ajay</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->
<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
<!-- modernizr js -->
<script src="assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Menu js -->
<script src="assets/js/rsmenu-main.js"></script>
<!-- op nav js -->
<script src="assets/js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Slick js -->
<script src="assets/js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- Skill bar js -->
<script src="assets/js/skill.bars.jquery.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
 <!-- counter top js -->
<script src="assets/js/waypoints.min.js"></script>
<!-- video js -->
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<!-- magnific popup js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- contact form js -->
<script src="assets/js/contact.form.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script>(function(w, d) { w.CollectId = "61ce9ae7b104f43d8bab2eda"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</body>
</html>
