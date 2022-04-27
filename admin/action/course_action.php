<?php
include('../../database/db.php');
if (isset($_POST['submit'])) {
    $category=$_POST['category'];
    $name=$_POST['name'];
    $duration=$_POST['duration'];
    $price=$_POST['price'];
    $ctype=$_POST['ctype'];
    $cduration=implode(",",$duration);
    // var_dump($cduration);
    // exit;
    $price2=implode(",",$price);
    $imgs=$_FILES['imgs']['name'];
    $url=$_POST['url'];
    $date=$_POST['date'];
    $notes=mysqli_real_escape_string($con,$_POST['notes']);
    $target_dir = "../images/course/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imgn=md5($target_file).rand();
    $imgname=$imgn.".".$imageFileType;
    $sql="INSERT INTO `course`(`course_cate`, `course_name`,`course_type`,`duration`,`img`, `video_url`, `date1`, `price`, `Description`) VALUES ($category,'$name','$ctype','$cduration','$imgname','$url','$date','$price2','$notes')";
    $run=mysqli_query($con,$sql);
    if ($run==true) {
      move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
      ?>
      <script>
        alert('course added.');
        window.location='../course.php';
      </script>
      <?php
    }else {
      ?>
      <script>
        alert('course  not added.');
        window.location='../course.php';
      </script>
      <?php
    }
}

if (isset($_POST['update'])) {
   $id=$_POST['id'];
   $category=$_POST['category'];
   $name=$_POST['name'];
   $duration=$_POST['duration'];
   $price=$_POST['price'];
   $ctype=$_POST['ctype'];
   $cduration=implode(",",$duration);
   // var_dump($cduration);
   // exit;
   $price2=implode(",",$price);
   $imgs=$_FILES['imgs']['name'];
   $img2=$_POST['img2'];
   $url=$_POST['url'];
   $date=$_POST['date'];

   $notes=mysqli_real_escape_string($con,$_POST['notes']);
   $target_dir = "../images/course/";
   $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   $imgn=md5($target_file).rand();
   $imgname=$imgn.".".$imageFileType;
   if ($imgs!='') {
      $imgname=$imgn.".".$imageFileType;
   }else {
     $imgname=$img2;
   }
   $sql="UPDATE `course` SET `course_cate`='$category',`course_name`='$name',`course_type`='$ctype',`duration`='$cduration',`img`='$imgname',`video_url`='$url',`date1`='$date',`price`='$price2',`Description`='$notes' WHERE id=$id";
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
       alert('course  updated.');
       window.location='../course.php';
     </script>
     <?php
   }else {
     ?>
     <script>
       alert('course not  updated.');
       window.location='../course.php';
     </script>
     <?php
   }
}
if (isset($_GET['cid'])) {
   $id=$_GET['cid'];
   $sql="DELETE FROM course WHERE id=$id";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
     ?>
     <script>
       alert('course deleted.');
       window.location='../course.php';
     </script>
     <?php
   }else {
     ?>
     <script>
       alert('course not  deleted.');
       window.location='../course.php';
     </script>
     <?php
   }
}
?>
