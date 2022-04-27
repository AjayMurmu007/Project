<?php
include('../../database/db.php');
if (isset($_POST['faqsubmit'])) {
   $title=$_POST['title'];
   $date1=$_POST['date1'];
   $desc=$_POST['desc'];
   $sql="INSERT INTO `faq`(`title`, `date1`, `details`) VALUES ('$title','date1','details')";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
      ?>
      <script>
        alert('faq added.');
        window.location='../faq.php';
      </script>
      <?php
   }else {
     ?>
     <script>
       alert('faq not added.');
       window.location='../faq.php';
     </script>
     <?php
   }
}


?>
