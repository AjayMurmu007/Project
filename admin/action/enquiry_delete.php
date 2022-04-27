<?php 
include('../../database/db.php');
if(isset($_GET['cid'])){
    $cid=$_GET['cid'];
    $sql="DELETE FROM enquiry WHERE id=$cid";
    $run=mysqli_query($con,$sql);
    if($run==true){
        ?>
        <script>
            alert('enquiry deteled.');
            window.location='../enquiry.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('something went wrong');
            window.location='../enquiry.php';
        </script>
        <?php
    }
}

?>