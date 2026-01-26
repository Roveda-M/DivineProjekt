<?php
session_start();

// Fshi të gjitha variablat e session
session_unset();

// Shkatërro sessionin
session_destroy();

// Ridrejto te login
header("Location: login.php");
exit;
?>
