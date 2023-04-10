<?php 

// db connection 
$dbconnetion = mysqli_connect("localhost","root","","bursary");
if(!$dbconnetion) {
    die();
}