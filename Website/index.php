<?php
session_start();

if ( ! isset($_SESSION['login']) ){
    $_SESSION['login'] = 0;
}

require "includes/dbconnect.php";
require "includes/functions.php";



$page = ( isset($_GET['page'])) ? $_GET['page'] : "Frontpage";

if($page == "Frontpage"){
    $site = "sites/frontpage.php";
}elseif($page == "Dashboard") {
    $site = "sites/dashboard.php";
}elseif($page == "MySubsites") {
    $site = "sites/subsites.php";
}elseif($page == "Friends") {
    $site = "sites/friendlist.php";
}elseif($page == "Messages") {
    $site = "sites/messages.php";
}elseif($page == "Settings") {
    $site = "sites/settings.php";
}elseif($page == "Create") {
    $site = "sites/create_subsite.php";
}else{
    $site= "sites/404.php";
}


require "header.php";
require $site;
require "footer.php";
