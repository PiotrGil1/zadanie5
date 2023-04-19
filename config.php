<?php

$mysqli = new mysqli('localhost','root', '', 'sprawdzanie');

if($mysqli->connect_errno){
    echo 'nie udało się połączyć do MySQL: ' . $mysqli->connect_error;
    exit();
}

?>