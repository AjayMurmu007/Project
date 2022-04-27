<?php
include('../../database/db.php');
if (isset($_POST['submit'])) {
   $imgs=$_FILES['imgs']['name'];
   $name=$_POST['name'];
   $notes=mysqli_real_escape_string($con,$_POST['notes']);
   $target_dir = "../images/testimonial/";
  $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $img=md5($target_file).rand();
  $imgname=$img.".".$imageFileType;
  $sql="INSERT INTO `testimonial`(`name`, `imgs`, `details`) VALUES ('$name','$imgname','$notes')";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
    ?>
    <script>
      alert('testimonial added.');
      window.location='../add_testimonial.php';
    </script>
    <?php
  }else {
    ?>
    <script>
      alert('testimonial not added.');
      window.location='../add_testimonial.php';
    </script>
    <?php
  }
 }
if (isset($_POST['update'])) {
     $id=$_POST['id'];
     $img2=$_POST['img2'];
     $imgs=$_FILES['imgs']['name'];
     $name=$_POST['name'];
     $notes=mysqli_real_escape_string($con,$_POST['notes']);
     $target_dir = "../images/testimonial/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $img=md5($target_file).rand();
    if ($imgs!='') {
       $imgname=$img.".".$imageFileType;
    }else {
      $imgname=$img2;
    }
    $sql="UPDATE `testimonial` SET `name`='$name',`imgs`='$imgname',`details`='$notes' WHERE id=$id";
    $run=mysqli_query($con,$sql);
    if ($run==true) {
      move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
      if ($imgs!='') {
        if (file_exists($target_dir.$img2)) {
            unlink($target_dir.$img2);
        }
      }
      ?>
      <script>
        alert('details updated.');
        window.location='../testimonial.php';
      </script>
      <?php
    }else {
      ?>
      <script>
        alert('details not  updated.');
        window.location='../testimonial.php';
      </script>
      <?php
    }
}
if (isset($_GET['tid'])) {
   $id=$_GET['tid'];
   $sql="DELETE FROM testimonial WHERE id=$id";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
      ?>
      <script>
        alert('details deleted.');
        window.location='../testimonial.php';
      </script>
      <?php
   }else {
     ?>
     <script>
       alert('details not deleted.');
       window.location='../testimonial.php';
     </script>
     <?php
   }
}

?>
