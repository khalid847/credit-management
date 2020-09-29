<?php

    $server="localhost";
    $username="khalidsaifullah";
    $password="Allah@1";
    $dbname="khalidd1";
    $con = mysqli_connect($server,$username,$password,$dbname);

    mysqli_select_db($con,'crud');

    /*if($con)
    {
        echo "Connected";
    }
    else
    {
        echo "Not connected";
    }*/
    
    
?>