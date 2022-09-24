<?php
session_start();
$_SESSION['login_status'] = false;
session_commit();
echo "<script>";
echo "location.assign('../index.php')";
echo "</script>";
