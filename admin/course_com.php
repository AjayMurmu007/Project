<?php 
include('../database/db.php');
if(isset($_POST['completepay'])){
    $id=$_POST['id'];
    $process=$_POST['process'];
    $sql="UPDATE course_buy SET status='$process' WHERE id=$id";
    $run=mysqli_query($con,$sql);
    if($run==true){
        ?>
        <script>
            alert('process updated.');
            window.location='course_payment.php';
        </script>
        <?php 
    }else{
         ?>
        <script>
            alert('process not updated.');
            window.location='course_payment.php';
        </script>
        <?php 
    }
}

?>