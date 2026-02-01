<?php
session_start();

// Fshi te gjitha variablat e session
session_unset();

// Shkaterro sessionin
session_destroy();

// Ridrejto te login
header("Location: login.php");
exit;
?>
