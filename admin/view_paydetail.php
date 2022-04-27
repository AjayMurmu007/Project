<?php include('header.php');
include('../database/db.php');
$id=$_GET['cid'];
$sql="SELECT * FROM course_buy WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
   while ($data=mysqli_fetch_assoc($run)) {
       $idd=$data['id'];
       $course_cate=$data['course_cate'];
       $course=$data['course'];
       $img=$data['img'];
       $duration=$data['duration'];
       $price=$data['price'];
       $full_name=$data['full_name'];
       $country=$data['country'];
       $address1=$data['address1'];
       $address2=$data['address2'];
       $city=$data['city'];
       $district=$data['district'];
       $pincode=$data['pincode'];
       $mobile=$data['mobile'];
       $email=$data['email'];
       $notes=$data['notes'];
       $status=$data['status'];
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
                    <a href="course_payment.php" class="btn btn-primary" style="float:right">Back</a>
                 <h4>Course Category Name : <?php
                                $ct=$course_cate; 
                                $sq="SELECT * FROM cource_categories WHERE id=$ct";
                                $rt=mysqli_query($con,$sq);
                                if($rt==true){
                                    while($rr=mysqli_fetch_assoc($rt)){
                                        echo $rr['title'];
                                    }
                                }
                                ?></h4>
                 <h6>Course : <?php echo $course; ?></h6>
                 <h6>Image : <img src="images/course/<?php echo $img; ?>" style="height:40px;width:40px"/></h6>
                 <h6>Duration : <?php echo $duration; ?></h6>
                 <p>Full Name : <?php echo $full_name; ?></p>
                 <p>Country : <?php echo $country; ?></p>
                 <p>Current Address : <?php echo $address1; ?></p>
                 <p>Permament Address : <?php echo $address2; ?></p>
                 <p>City : <?php echo $city; ?></p>
                 <p>District : <?php echo $district; ?></p>
                 <p>Pincode : <?php echo $pincode; ?></p>
                 <p>Mobile Number : <?php echo $mobile; ?></p>
                 <p>Email : <?php echo $email; ?></p>
                 <p>Notes : <?php echo $notes; ?></p>
                 <p>Date : <?php echo $date1; ?></p>
                 <form action="course_com.php" method="POST">
                     <input type="hidden" name="id" value="<?php echo $idd; ?>" />
                     <select name="process">
                         <option><?php echo $status; ?></option>
                         <option>complete</option>
                         <option>cancel</option>
                     </select>
                     <input type="submit" name="completepay" value="submit" />
                 </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
<?php include('footer.php'); ?>
