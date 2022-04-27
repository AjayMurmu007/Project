<?php
include('database/db.php');
if (isset($_POST['submit'])) {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];
   $sql="INSERT INTO `contact`(`name`, `email`, `phone`, `subject`, `message`) VALUES ('$name','$email','$phone','$subject','$message')";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
      ?>
      <script>
        alert('Thank you for your contact.');
        window.location='contact.php';
      </script>
      <?php
   }else {
     ?>
     <script>
       alert('please fill the form with proper details');
       window.location='contact.php';
     </script>
     <?php
   }
}
?>
