<?php

require "includes/dbconnect.php";
require "includes/functions.php";


$page = ( isset($_GET['page'])) ? $_GET['page'] : "home";



require "header.php";
require "footer.php";