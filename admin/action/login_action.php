<?php
session_start();
include('../../database/db.php');
if (isset($_POST['submit'])) {
   $username=$_POST['username'];
   $password=$_POST['password'];
   $sql="SELECT * FROM admin WHERE uname='$username' AND password='$password'";
   $run=mysqli_query($con,$sql);
   $c=mysqli_num_rows($run);
   if ($run==true) {
     if ($c>0) {
      while ($data=mysqli_fetch_assoc($run)) {
            $_SESSION["username"]=$data['uname'];
      }
      ?>
      <script>
        alert('login successful.');
        window.location='../index.php';
      </script>
      <?php
    }else {
      ?>
      <script>
        alert('username and password not matched..');
        window.location='../login.php';
      </script>
      <?php
    }
  }else {
    ?>
    <script>
      alert('username and password not matched..');
      window.location='../login.php';
    </script>
    <?php
  }
}
?>
