<?php
session_start();
if(isset($_SESSION['login'])){
  echo "<pre><center>";
  print_r($_SESSION['login']);
  // echo $_SESSION['login'][0];
  echo "</pre></center>";

}

?>
