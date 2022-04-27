<?php 
include('database/db.php');
if(isset($_POST['admission'])){
    $stud_name=$_POST['fullname'];
    $pname=$_POST['parentname'];
    $phone_number=$_POST['phone_number'];
    $coursecate=$_POST['coursecate'];
    $duration=$_POST['duration'];
    $price=$_POST['price'];
    $whatsno=$_POST['whatsno'];
    $address=$_POST['address'];
    $date1=date('d-m-Y');
    $status="pending";
    $sql="INSERT INTO `admission`(`fullname`, `pname`, `contactno`, `course`, `duration`, `price`, `whatsappno`, `address`, `date1`, `status`) 
    VALUES ('$stud_name','$pname','$phone_number','$coursecate','$duration','$price','$whatsno','$address','$date1','$status')";
    $run=mysqli_query($con,$sql);
    if($run==true){
        ?>
        <script>
            alert('details submitted');
            window.location='adminssion.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('details not submitted');
            window.location='adminssion.php';
        </script>
        <?php
    }
}



?>