<?php
// This file should be named access_control.php
session_start();
include('database_inc.php');
// it is possible this might be blank. We check for that later. 
$unique_id_of_logged_in_user = $_SESSION['unique_id_of_logged_in_user'];
// We query our database looking for th unique id for a logged in user. 
$access_logged_in_check_query = mysqli_query($connect,"SELECT * FROM LearnSmart WHERE logged_in_now = 1 AND unique_id = '$unique_id_of_logged_in_user';");
// if there is a result, we assign the unique ID to a variable 
while ($row = mysqli_fetch_array($access_logged_in_check_query))
{ 
    $unique_id_from_database = $row['unique_id'];
    $role_from_database = $row['role'];
    $email = $row['email'];
    $username = $row['username'];
    $id = $row['id'];
    $password = $row['password'];
    $compiled = $row['compiled'];
    $scripted = $row['scripted'];
    $ddl = $row['ddl'];
    $interpreted = $row['interpreted'];
    $level = $row['level'];
}
// if both the unique id is set and the id from the database is set, AND the id of the logged in user is the same in the database,
// we can assume we have a logged in user. 
if((isset($unique_id_of_logged_in_user) && isset($unique_id_from_database)) &&  $unique_id_of_logged_in_user == $unique_id_from_database) {
    $access_control = array("logged_in"=>"yes", "role"=>$role_from_database,"email"=>$email,"username"=>$username,"id"=>$id, "level"=>$level, $coursePreference = array("Compiled"=>$compiled, "Scripted"=>$scripted, "Interpreted"=>$interpreted, "DDL"=>$ddl));
} else {
    $access_control = array("logged_in"=>"no");
    
}