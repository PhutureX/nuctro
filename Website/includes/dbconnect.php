<?php

$dblink = mysqli_connect("localhost", "root", "root", "Nuctro");
mysqli_set_charset($dblink, 'utf8');

if( ! $dblink ){
    die('Keine Verbindung zum DB Server');
}

?>