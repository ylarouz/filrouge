<?php
define('bdhost','localhost');
define('bduser','root');
define('bdpassword','');
define('bdname','shop1');
$con = mysqli_connect(bdhost,bduser,bdpassword,bdname);
    // if($con){
    //     echo 'connected';
    // }else{
    //     echo 'not connected';
    // }
?>