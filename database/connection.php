<?php

$dbconnect =  mysqli_connect('localhost', 'root', '', 'summit');

if(!$dbconnect) {
    die('error connecting to database');
}