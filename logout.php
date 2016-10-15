<?php
   session_start();
   unset($_SESSION["login"]);
   unset($_SESSION["userid"]);
   unset($_SESSION["timeout"]);
   unset($_SESSION["valid"]);
   header('Refresh: 1; URL = index.php');
?>
