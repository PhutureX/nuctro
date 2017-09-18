<?php
session_start();

if ( ! isset($_SESSION['login']) ){
    $_SESSION['login'] = 0;
}

require "includes/dbconnect.php";
require "includes/functions.php";



$page = ( isset($_GET['page'])) ? $_GET['page'] : "Frontpage";

if($page  == "Frontpage" or $page == "frontpage"){
    $site = "sites/frontpage.php";
}elseif($page == "Dashboard" or $page == "dashboard") {
    $site = "sites/dashboard.php";
}elseif($page == "MySubsites" or $page == "mysubsites") {
    $site = "sites/subsites.php";
}elseif($page == "Friends" or $page == "friends") {
    $site = "sites/friendlist.php";
}elseif($page == "Messages" or $page == "messages") {
    $site = "sites/messages.php";
}elseif($page == "Settings" or $page == "settings") {
    $site = "sites/settings.php";
}elseif($page == "Create" or $page == "create") {
    $site = "sites/create_subsite.php";
}else{
    $site= "sites/404.php";
}


require "header.php";
require $site;
require "footer.php";
