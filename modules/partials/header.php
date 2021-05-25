<!DOCTYPE html>

<html lang="en">
  <head>
    <link rel="stylesheet", href="./assets/css/index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
    <title>My web page</title>
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
        <li>Menu 1</li>
        <li>Menu 2</li>
        <li>Menu 3</li>
        <li>Menu 4</li>
    </ul>
</nav>
