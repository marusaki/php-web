<?php
// Define an array to contain page titles
$pageTitles = array(
    'home' => "Home",
    "profile" => "My Profile",
);
// Get page title depend on what is using module. 
$pageTitle = $pageTitles[$module];
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet", href="./assets/css/index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <script src="./assets/js/index.js"></script>
</head>

<body>
<header>
    <div>The logo</div>
    <div id="slogan" class="slogan">The header slogan</div> 
    <div id="form">
        <ul>
            <li>Hi <span>Guest</span></li>
            <!-- Add event onlick, when user click, show login form by calling function showLoginForm, we will make this function later -->
            <li><a href="javascript:void(0)" onclick="showLoginForm()">Login</a></li>
        </ul>        
        <form id="login">
            <input type="text" name="username" placeholder="User name" />
            <input type="password" name="password" placeholder="Password"/>
            <label><input type="checkbox" name="rememberUsername" />Remember user name </label>
            <button type="submit" name="Login">Login</button>
        </form>
        <form method="GET" id="search">
            <input type="text" name="keyword" />
            <i class="material-icons">search</i>
        </form>
    </div>
</header>
<nav>
    <ul>
        <li><a href="./index.php?">Home</a></li>
        <li><a href="./index.php?m=profile">My Profile</a></li>
    </ul>
</nav>
