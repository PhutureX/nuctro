<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nuctro</title>
    <link href="css/main.css" media="all" rel="stylesheet" >
    <link href="libraries/Fileuploader/jquery.fileuploader.css" media="all" rel="stylesheet">
    <link href="libraries/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="img/logo/Favicon.png" rel="shortcut icon"  />
</head>
<body>
<header>
    <nav class="main-nav">
        <ul>
            <li class="desktop_menu main-nav-active"><a href="/"><i class="material-icons">home</i><span>Frontpage</span></a></li>
            <li class="desktop_menu"><a href="sites/dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a></li>
            <li class="desktop_menu"><a href="sites/subsites"><i class="material-icons">forum</i><span>My Subsites</span></a></li>
            <li class="desktop_menu"><a href="sites/friendlist"><i class="material-icons">supervisor_account</i><span>Friends</span></a></li>
            <li class="desktop_menu"><a href="sites/messages"><i class="material-icons">chat_bubble</i><span>Messages</span></a></li>
            <li class="desktop_menu"><a href="sites/settings"><i class="material-icons">settings</i><span>Settings</span></a></li>
            <li class="desktop_menu"><a href="#"><i class="material-icons">shuffle</i><span>Random Subsite</span></a></li>
            <li class="mobile_btn"><a href="#" class="toggle-menu" onclick="openMobileMenu()"><i class="material-icons">menu</i></a></li>
        </ul>
        <ul>
            <li><a href="#" class="mobile_sitename">Subsite</a></li>
        </ul>
        <ul>
            <li><a href="#" class="toggle-sidebar" onclick="openSidebar()"><i class="material-icons">more_horiz</i></a></li>
        </ul>
        <ul>
            <li><a href="#" class="login_popup_open">Login or Register</a></li>
            <li><button class="post-btn post_popup_open">Create Post</button></li>
        </ul>
    </nav>
    <nav id="mobile_menu">
        <div class="box-close"><a href="#" class="login_popup_close" onclick="closeMobileMenu()"><i class="material-icons">close</i></a></div>
        <a href="/"><i class="material-icons">home</i>Frontpage</a>
        <a href="#" class="post_popup_open"><i class="material-icons">send</i>Create a Post</a>
        <a href="sites/dashboard"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href="sites/subsites"><i class="material-icons">forum</i>My Subsites</a>
        <a href="sites/friendlist"><i class="material-icons">supervisor_account</i>Friends</a>
        <a href="sites/messages"><i class="material-icons">chat_bubble</i>Messages</a>
        <a href="sites/settings"><i class="material-icons">settings</i>Settings</a>
        <a href="#"><i class="material-icons">shuffle</i>Random Subsite</a>
        <a href="#"><i class="material-icons">exit_to_app</i>Logout</a>
        <div class="mobile_menu_tooltip">Username</div>
    </nav>
</header>