<?php include('header.php');
include('../database/db.php');
$id=$_GET['cid'];
$sql="SELECT * FROM admission WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
   while ($data=mysqli_fetch_assoc($run)) {
       $idd=$data['id'];
       $fullname=$data['fullname'];
       $pname=$data['pname'];
       $contactno=$data['contactno'];
       $course=$data['course'];
       $duration=$data['duration'];
       $price=$data['price'];
       $whatsappno=$data['whatsappno'];
       $address=$data['address'];
       $date1=$data['date1'];
       $status=$data['status'];
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
                    <a href="admission_payment.php" class="btn btn-primary" style="float:right">Back</a>
                 <h4>Course Name : <?php
                                $ct=$course; 
                                $sq="SELECT * FROM course WHERE id=$ct";
                                $rt=mysqli_query($con,$sq);
                                if($rt==true){
                                    while($rr=mysqli_fetch_assoc($rt)){
                                        echo $rr['course_name'];
                                    }
                                }
                                ?></h4>
                 <h6>Student Name : <?php echo $fullname; ?></h6>
                 <h6>Parents Name : <?php echo $pname; ?></h6>
                 <h6>Contact Number : <?php echo $contactno; ?></h6>
                 <p>Whatsapp Number : <?php echo $whatsappno; ?></p>
                 <p>Duration : <?php echo $duration; ?></p>
                 <p>Price : <?php echo $price; ?></p>
                 <p>Date : <?php echo $date1; ?></p>
                 <form action="admission_com.php" method="POST">
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
