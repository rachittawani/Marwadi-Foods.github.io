<?php

// Inialize session
session_start();
$conn = new mysqli("localhost", "root", "", "marwadi_foods");
$sql="DELETE FROM cart";
$res=$conn->query($sql);
// Delete certain session
unset($_SESSION['email']);
// Delete all session variables
// session_destroy();

// Jump to login page
session_destroy();
header('Location: index.php');

?>