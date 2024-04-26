<?php
$mysqli= new mysqli("localhost", "root", "", "skincare");

if ($mysqli->connect_errno) {
    echo "no: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno; 
}; 
?>