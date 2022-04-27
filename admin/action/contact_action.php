<?php
include('../../database/db.php');
if (isset($_GET['gid'])) {
   $id=$_GET['gid'];
   $sql="DELETE FROM contact WHERE id=$id";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
      ?>
      <script>
        alert('data deleted.');
        window.location='../contact.php';
      </script>
      <?php
   }else {
     ?>
     <script>
       alert('data not deleted.');
       window.location='../contact.php';
     </script>
     <?php
   }
}
?>
