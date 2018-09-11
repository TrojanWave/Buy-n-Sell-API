<?php
session_start();

if ($_SESSION["active"] == 1) {
  // code...
}else {
  header('Location: login.html');
}

 ?>
