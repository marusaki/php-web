<!DOCTYPE html>
<?php
// Get modules need to use for main content by using $_GET
$module = isset($_GET['m']) ? $_GET['m'] : null;

// If there is no get param to load page, set $module default to home page
if ($module == null) {
    $module = 'home';
}

# Include header
require __DIR__ . '/modules/partials/header.php';
# Include main contain
require __DIR__ . "/modules/$module.php";
# Include footer
require __DIR__ . '/modules/partials/footer.php';
