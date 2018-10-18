<?php

/**
 * Created by PhpStorm.
 * User: it16174290
 * Date: 06/08/2018
 * Time: 23:38
 */
    $host="localhost";
    $user="root";
    $password=NULL;
    $dbname= "useraccount";
    $con=mysqli_connect($host,$user,$password,$dbname);
    $con=mysqli_connect($host,$user,$password,$dbname);

    if(!$con){
        die("Connection failed: ".mysql_connect_error());
        echo "error";
    }