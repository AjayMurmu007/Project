<?php 
include('../database/db.php');
if(isset($_POST['completepay'])){
    $id=$_POST['id'];
    $process=$_POST['process'];
    $sql="UPDATE admission SET status='$process' WHERE id=$id";
    $run=mysqli_query($con,$sql);
    if($run==true){
        ?>
        <script>
            alert('details updated.');
            window.location='admission_payment.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('somwthing went wrong.');
            window.location='admission_payment.php';
        </script>
        <?php
    }
}


?>