<?php
include('../../database/db.php');
if (isset($_POST['submit'])) {
    $title=$_POST['title'];
    $imgs=$_FILES['imgs']['name'];
    $date=$_POST['date'];
    $target_dir = "../images/gallery/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $img=md5($target_file).rand();
    $imgname=$img.".".$imageFileType;
    $sql="INSERT INTO `gallery`(`name`, `imgs`, `date1`) VALUES ('$title','$imgname','$date')";
    $run=mysqli_query($con,$sql);
    if ($run==true) {
       move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
       ?>
       <script>
         alert('gallery added.');
         window.location='../add_gallery.php';
       </script>
       <?php
    }else {
      ?>
      <script>
        alert('gallery not added.');
        window.location='../add_gallery.php';
      </script>
      <?php
    }
}

if (isset($_POST['update'])) {
   $id=$_POST['id'];
   $title=$_POST['title'];
   $img2=$_POST['img2'];
   $imgs=$_FILES['imgs']['name'];
   $date=$_POST['date'];
   $target_dir = "../images/gallery/";
   $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   $img=md5($target_file).rand();
   if ($imgs!='') {
     $imgname=$img.".".$imageFileType;
   }else {
     $imgname=$img2;
   }
   $sql="UPDATE `gallery` SET `name`='$title',`imgs`='$imgname',`date1`='$date' WHERE id=$id";
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
       alert('gallery updated.');
       window.location='../gallery.php';
     </script>
     <?php
   }else {
     ?>
     <script>
       alert('gallery updated.');
       window.location='../gallery.php';
     </script>
     <?php
   }
}
if (isset($_GET['gid'])) {
    $id=$_GET['gid'];
    $sql="DELETE FROM gallery WHERE id=$id";
    $run=mysqli_query($con,$sql);
    if ($run==true) {
      ?>
      <script>
        alert('gallery deleted.');
        window.location='../gallery.php';
      </script>
      <?php
    }else {
      ?>
      <script>
        alert('gallery not updated.');
        window.location='../gallery.php';
      </script>
      <?php
    }
}
?>
