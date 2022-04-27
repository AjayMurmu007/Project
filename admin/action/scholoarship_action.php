<?php 
include('../../database/db.php');
if(isset($_POST['submit'])){
    $scholoartitle=mysqli_real_escape_string($con,$_POST['scholoartitle']);
    $fee=$_POST['fee'];
    $imgs=$_FILES['imgs']['name'];
    $url=$_POST['url'];
    $date1=$_POST['date'];
    $lnotes=mysqli_real_escape_string($con,$_POST['lnotes']);
    $snotes=mysqli_real_escape_string($con,$_POST['snotes']);
    $target_dir = "../images/scholarship/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $filename=md5($target_file).rand().".".$imageFileType;
    $sql="INSERT INTO `scholorship`(`title`, `fee`, `imgs`, `video_url`, `date1`, `ldescription`, `sdescription`) 
    VALUES ('$scholoartitle','$fee','$filename','$url','$date1','$lnotes','$snotes')";
    $run=mysqli_query($con,$sql);
    if($run==true){
        move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$filename);
        ?>
        <script>
            alert('details saved.');
            window.location='../add_scholarship.php';
        </script>
        <?php 
    }else{
        ?>
        <script>
            alert('something went wrong.');
            window.location='../add_scholarship.php';
        </script>
        <?php 
    }
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $scholoartitle=mysqli_real_escape_string($con,$_POST['scholoartitle']);
    $fee=$_POST['fee'];
    $imgs=$_FILES['imgs']['name'];
    $img2=$_POST['img2'];
    $url=$_POST['url'];
    $date1=$_POST['date'];
    $lnotes=mysqli_real_escape_string($con, $_POST['lnotes']);
    $snotes=mysqli_real_escape_string($con, $_POST['snotes']);
    $target_dir = "../images/scholarship/";
    $target_file = $target_dir . basename($_FILES["imgs"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if($imgs!=''){
        $filename=md5($target_file).rand().".".$imageFileType;
    }else{
        $filename=$img2;
    }
    $sql="UPDATE `scholorship` SET `title`='$scholoartitle',`fee`='$fee',`imgs`='$filename',`video_url`='$url',`date1`='$date1',`ldescription`='$lnotes',`sdescription`='$snotes' WHERE id=$id";
   $run=mysqli_query($con,$sql);
   if($run==true){
       move_uploaded_file($_FILES["imgs"]["tmp_name"], $target_dir.$filename);
       if($imgs!=''){
           if(file_exists($target_dir.$img2)){
               unlink($target_dir.$img2);
           }
       }
       ?>
       <script>
           alert('data updated.');
           window.location='../scholarship.php';
       </script>
       <?php
   }else{
       ?>
       <script>
           alert('something went wrong');
           window.location='../scholarship.php';
       </script>
       <?php
   }
    
}

if(isset($_GET['cid'])){
     $cid=$_GET['cid'];
     $sql="DELETE FROM scholorship WHERE id=$cid";
     $run=mysqli_query($con,$sql);
     if($run==true){
         ?>
       <script>
           alert('data deleted');
           window.location='../scholarship.php';
       </script>
       <?php
     }else{
         ?>
       <script>
           alert('something went wrong');
           window.location='../scholarship.php';
       </script>
       <?php
     }
}
?>