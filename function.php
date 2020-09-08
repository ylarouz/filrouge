<?php
session_start();
// session_destroy();
ob_start();
function redirect($page)
{
    header('location:' . $page);
}
function query($sql){
    global $con;
    return mysqli_query($con,$sql);
}