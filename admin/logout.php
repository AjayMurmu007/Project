<?php
session_start();
if (isset($_SESSION["username"])) {
    session_unset();
    session_destroy();
    ?>
    <script>
      alert('logout successful.');
      window.location='login.php';
    </script>
    <?php
}

?>
