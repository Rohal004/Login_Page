 <?php
 session_start();
 if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
    header("location:index.php?error=3 ");
 }
 ?>


      
      