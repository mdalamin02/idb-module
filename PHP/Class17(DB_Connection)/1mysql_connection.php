<?php 

//Bulid connection string
$mysqli = new mysqli("localhost", "root","","course_management");

if (!$mysqli->connect_errno) {
    # code...
}