<?php
session_start(); 
$uname = $_POST['email'];
$psw = $_POST['psw'];
if (empty(trim($uname))) {
    
     header("location:index.php?error=4");
          
}
elseif(empty(trim($psw))){
header("location:index.php?error=5");
}
elseif ($uname=="rohal@gmail.com" && $psw=="jamal") {
    header("location:home.php");
    $_SESSION['login']=1;
}
else
{
    header("location:index.php?error=1");
}
?>