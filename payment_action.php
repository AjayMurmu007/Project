<?php 
include('database/db.php');
if(isset($_POST['payaction'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $fullname=$fname."  ".$lname;
    $country=$_POST['country'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $pcode=$_POST['pcode'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $notes=$_POST['notes'];
    $category=$_POST['category'];
    $course=$_POST['course'];
    $img=$_POST['img'];
    $duration=$_POST['duration'];
    $price=$_POST['price'];
    $date=date('d-m-Y');
    $status="pending";
    $sql="INSERT INTO `course_buy`(`course_cate`, `course`, `img`, `duration`, `price`, `full_name`, `country`, `address1`, `address2`, `city`, `district`, `pincode`, `mobile`, `email`, `notes`, `status`, `date1`) 
    VALUES ($category,'$course','$img','$duration','$price','$fullname','$country','$address1','$address2','$city','$district','$pcode','$number','$email','$notes','$status','$date')";
    $run=mysqli_query($con,$sql);
    if($run==true){
        ?>
        <script>
            alert('payment added.');
            window.location='course.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('something went wrong');
            window.location='checkout.php';
        </script>
        <?php
    }
}

?>