<?php
    session_start();
    require 'php_connect.php';

if(isset($_POST['submit'])) {
    if( isset($_COOKIE['token'])) {
        if (isset($_POST['na']) && isset($_POST['pn']) && isset($_POST['job']) && isset($_POST['csrf_token'])) {
            $na = $_POST['na'];
            $pn = $_POST['pn'];
            $job = $_POST['job'];
            $ct = $_POST['csrf_token'];
            /** @var TYPE_NAME $ct2 */
            $ct2 = $_COOKIE['token'];

            if ($ct === $ct2) {
                $sql = "INSERT INTO emp(name,phone,job) VALUES ('$na','$pn','$job')";

                if (mysqli_query($con, $sql)) {
                    echo "<script>alert(\"Event Successful\");location=\"page1.php\";</script>";

                } else {
                    echo "<script>alert('cannot upload your data' );location=\"page1.php\";</script>";
                    //header("Location: page1.php");
                }
            } else {
                echo "<script>alert('authentication is not match');location=\"page1.php\";</script>";
                //header("Location: page1.php");
            }
        }else{
            echo "<script>alert('one or more fields are empty');location=\"page1.php\";</script>";
            //header("Location: page1.php");
        }
    }else{
        echo "<script>alert('invalid token');location=\"page1.php\";</script>";
        //header("Location: page1.php");
    }
}
