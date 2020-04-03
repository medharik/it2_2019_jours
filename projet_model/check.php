<?php
include("functions.php");
session_start();
checker($_POST['login'],$_POST['passe']);

header("location:index_absence.php");


?>