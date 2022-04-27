<?php
include('../../database/db.php');
if (isset($_POST['submit'])) {
   $imgs=$_FILES['imgs']['name'];
   $title=$_POST['title'];
   $date1=$_POST['date1'];
   $desc=mysqli_real_escape_string($con,$_POST['desc']);
   $target_dir = "../images/notice/";
  $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $img=md5($target_file).rand();
  $imgname=$img.".".$imageFileType;
  $sql="INSERT INTO `notice`(`name`, `imgs`, `date1`, `description`) VALUES ('$title','$imgname','$date1','$desc')";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
     move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
     ?>
     <script>
       alert('notice added.');
       window.location='../add_notice.php';
     </script>
     <?php
  }else {
    ?>
    <script>
      alert('notice not added.');
      window.location='../add_notice.php';
    </script>
    <?php
  }
}
if (isset($_POST['update'])) {
   $id=$_POST['id'];
   $imgs=$_FILES['imgs']['name'];
   $img2=$_POST['img2'];
   $title=$_POST['title'];
   $date1=$_POST['date1'];
   $desc=mysqli_real_escape_string($con,$_POST['desc']);
   $target_dir = "../images/notice/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $img=md5($target_file).rand();
    if ($imgs!='') {
      $imgname=$img.".".$imageFileType;
    }else {
      $imgname=$img2;
    }
    $sql="UPDATE `notice` SET `name`='$title',`imgs`='$imgname',`date1`='$date1',`description`='$desc' WHERE id=$id";
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
        alert('notice updated.');
        window.location='../notice.php';
      </script>
      <?php
    }else {
      ?>
      <script>
        alert('notice not updated.');
        window.location='../notice.php';
      </script>
      <?php
    }
}
if (isset($_GET['nid'])) {
   $id=$_GET['nid'];
   $sql="DELETE FROM notice WHERE id=$id";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
       ?>
       <script>
         alert('notice deleted.');
         window.location='../notice.php';
       </script>
       <?php
   }else {
     ?>
     <script>
       alert('notice not deleted.');
       window.location='../notice.php';
     </script>
     <?php
   }
}
?>
