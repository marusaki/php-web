<?php
// File modules/logout.php
session_destroy();

// Redirect to home page after logout
header('Location: index.php');
?>
