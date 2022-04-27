<?php include('header.php'); ?>
<?php include('database/db.php');  ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/4.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">Gallery</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>Gallery</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Events Section Start -->
<div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
       <div class="row margin-0">
         <?php
         $sql="SELECT * FROM gallery ORDER BY id DESC";
         $run=mysqli_query($con,$sql);
         if ($run==true) {
            while ($data=mysqli_fetch_assoc($run)) {
              ?>
              <div class="col-lg-4 mb-0 padding-0 col-md-6">
                   <div class="gallery-img">
                       <a class="image-popup" href="admin/images/gallery/<?php echo $data['imgs']; ?>"><img src="admin/images/gallery/<?php echo $data['imgs']; ?>" alt=""></a>
                   </div>
              </div>
              <?php
            }
         }
         ?>
       </div>
    </div>
</div>
<!-- Events Section End -->
<?php include('footer.php'); ?>
