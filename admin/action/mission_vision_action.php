<?php
include('../../database/db.php');
if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $title=$_POST['title'];
    $imgs=$_FILES['imgs']['name'];
    $imgtext=$_POST['imgtext'];
    $notes=mysqli_real_escape_string($con, $_POST['notes']);
    $target_dir = "../images/missionandvission/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imgn=md5($target_file).rand();
    if ($imgs!='') {
       $imgname=$imgn.".".$imageFileType;
    }else {
      $imgname=$imgtext;
    }
    $sql="SELECT * FROM missionandvision";
    $run=mysqli_query($con,$sql);
    $c=mysqli_num_rows($run);
    if ($c>0) {
      $sql2="UPDATE `missionandvision` SET `title`='$title',`imgs`='$imgname',`description`='$notes' WHERE id=$id";
      $run2=mysqli_query($con,$sql2);
      if ($run2==true) {
        move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
        if (!empty($imgs)) {
          if (file_exists($target_dir.$imgtext))
          {
          unlink($target_dir.$imgtext);
          }
        }
         ?>
         <script>
           alert('mission and vision updated.');
           window.location='../mission.php';
         </script>
         <?php
      }else {
        ?>
        <script>
          alert('mission and vision not updated.');
          window.location='../mission.php';
        </script>
        <?php
      }
    }else {
      $sql3="INSERT INTO `missionandvision`(`title`, `imgs`, `description`) VALUES ('$title','$imgname','$notes')";
      $run3=mysqli_query($con,$sql3);
      if ($run3==true) {
         move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
         ?>
         <script>
           alert('mission and vision added.');
           window.location='../mission.php';
         </script>
         <?php
      }else {
        ?>
        <script>
          alert('mission and vision not added.');
          window.location='../mission.php';
        </script>
        <?php
      }
    }
}
?>
