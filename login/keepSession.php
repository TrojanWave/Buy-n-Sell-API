<?php
session_start();

$user_id = $_SESSION["user_id"];
$active = $_SESSION["active"];

$_SESSION["user_id"] = $user_id;
$_SESSION["active"] = $active;

 ?>
