<?php
include('../../database/db.php');
if (isset($_POST['submit'])) {
    $imgs=$_FILES['imgs']['name'];
    $name=$_POST['name'];
    $course=$_POST['course'];
    $faculty=$_POST['faculty'];
    $experience=$_POST['experience'];
    $target_dir = "../images/faculty/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $img=md5($target_file).rand();
    $imgname=$img.".".$imageFileType;
    $sql="INSERT INTO `faculty`(`name`, `imgs`, `course`, `faculty`, `experience`) VALUES ('$name','$imgname','$course','$faculty','$experience')";
    $run=mysqli_query($con,$sql);
    if ($run==true) {
      move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
      ?>
      <script>
        alert('faculty added.');
        window.location='../add_teacher.php';
      </script>
      <?php
    }else {
      ?>
      <script>
        alert('faculty not added.');
        window.location='../add_teacher.php';
      </script>
      <?php
    }
}

if (isset($_POST['update'])) {
   $id=$_POST['id'];
   $imgs=$_FILES['imgs']['name'];
   $img2=$_POST['img2'];
   $name=$_POST['name'];
   $course=$_POST['course'];
   $faculty=$_POST['faculty'];
   $experience=$_POST['experience'];
   $target_dir = "../images/faculty/";
   $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   $img=md5($target_file).rand();
   $imgname=$img.".".$imageFileType;
   if ($imgs!='') {
     $imgname=$img.".".$imageFileType;
   }else {
     $imgname=$img2;
   }
   $sql="UPDATE `faculty` SET `name`='$name',`imgs`='$imgname',`course`='$course',`faculty`='$faculty',`experience`='$experience' WHERE id=$id";
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
     alert('faculty updated.');
     window.location='../teacher.php';
   </script>
   <?php
 }else {
   ?>
   <script>
     alert('faculty not updated.');
     window.location='../teacher.php';
   </script>
   <?php
 }
}
if (isset($_GET['fid'])) {
   $id=$_GET['fid'];
   $sql="DELETE FROM faculty WHERE id=$id";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
       ?>
       <script>
         alert('faculty deleted.');
         window.location='../teacher.php';
       </script>
       <?php
   }else {
     ?>
     <script>
       alert('faculty not deleted.');
       window.location='../teacher.php';
     </script>
     <?php
   }
}
?>
