<?php include('header.php');
include('../database/db.php');
$id=$_GET['cid'];
$sql="SELECT * FROM contact WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
   while ($data=mysqli_fetch_assoc($run)) {
       $name=$data['name'];
       $email=$data['email'];
       $phone=$data['phone'];
       $subject=$data['subject'];
       $message=$data['message'];
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
                    <a href="contact.php" class="btn btn-primary" style="float:right">Back</a>
                 <h4>Name : <?php echo $name; ?></h4>
                 <h6>Email : <?php echo $email; ?></h6>
                 <h6>Phone : <?php echo $phone; ?></h6>
                 <h6>Subject : <?php echo $subject; ?></h6>
                 <p>Message : <?php echo $message; ?></p>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
<?php include('footer.php'); ?>
