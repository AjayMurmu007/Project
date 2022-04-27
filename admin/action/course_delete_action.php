<?php 
include('../../database/db.php');
$gid=$_GET['gid'];
$sql="DELETE FROM course_buy WHERE id=$gid";
$run=mysqli_query($con,$sql);
if($run==true){
    ?>
    <script>
        alert('deleted....');
        window.location='../course_payment.php';
    </script>
    <?php
}else{
     ?>
    <script>
        alert('something went wrong....');
        window.location='../course_payment.php';
    </script>
    <?php
}

?>