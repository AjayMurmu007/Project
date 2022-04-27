<?php include('header.php');
include('../database/db.php');
$id=$_GET['cid'];
$sql="SELECT * FROM enquiry WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
   while ($data=mysqli_fetch_assoc($run)) {
       $name=$data['name'];
       $phone=$data['mobile'];
       $subject=$data['description'];
       $date1=$data['date1'];
   }
}
?>
<div class="container-fluid">
    <!-- end row -->
    <div class="row">

      <div class="col-xl-3"></div>
        <div class="col-xl-6">

            <div class="card">

                <div class="card-body">
                    <a href="enquiry.php" class="btn btn-primary" style="float:right">Back</a>
                 <h4>Name : <?php echo $name; ?></h4>
                 <h6>Mobile Number : <?php echo $phone; ?></h6>
                 <h6>Description : <?php echo $subject; ?></h6>
                 <p>Date : <?php echo $date1; ?></p>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
<?php include('footer.php'); ?>
