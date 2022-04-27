<?php
include('../../database/db.php');
if (isset($_POST['submit'])) {
    $title=$_POST['title'];
    $imgs=$_FILES['imgs']['name'];
    $notes=mysqli_real_escape_string($con,$_POST['notes']);
    $target_dir = "../images/category/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imgn=md5($target_file).rand();
    $imgname=$imgn.".".$imageFileType;
    $sql="INSERT INTO `cource_categories`(`title`, `imgs`, `notes`) VALUES ('$title','$imgname','$notes')";
    $run=mysqli_query($con,$sql);
    if ($run==true) {
      move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
      ?>
      <script>
        alert('category added.');
        window.location='../add_course_cate.php';
      </script>
      <?php
    }else {
      ?>
      <script>
        alert('category not added.');
        window.location='../add_course_cate.php';
      </script>
      <?php
    }
}
if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $title=$_POST['title'];
    $imgs=$_FILES['imgs']['name'];
    $img2=$_POST['img2'];
    $notes=mysqli_real_escape_string($con,$_POST['notes']);
    $target_dir = "../images/category/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imgn=md5($target_file).rand();
    if ($imgs!='') {
        $imgname=$imgn.".".$imageFileType;
    }else {
      $imgname=$img2;
    }
  $sql2="UPDATE `cource_categories` SET `title`='$title',`imgs`='$imgname',`notes`='$notes' WHERE id=$id";
  $run2=mysqli_query($con,$sql2);
  if ($run2==true) {
    move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$imgname);
    if ($imgs!='') {
      if (file_exists($target_dir.$img2)) {
        unlink($target_dir.$img2);
      }
    }
    ?>
    <script>
      alert('category updated.');
      window.location='../course_category.php';
    </script>
    <?php
  }else {
    ?>
    <script>
      alert('category not updated.');
      window.location='../course_category.php';
    </script>
    <?php
  }
}
if (isset($_GET['cid'])) {
    $id=$_GET['cid'];
    $sql="DELETE FROM cource_categories WHERE id=$id";
    $run=mysqli_query($con,$sql);
    if ($run==true) {
        ?>
        <script>
          alert('category deleted.');
          window.location='../course_category.php';
        </script>
        <?php
    }else {
      ?>
      <script>
        alert('category not deleted.');
        window.location='../course_category.php';
      </script>
      <?php
    }
}

?>
