<?php
/**
 * Created by PhpStorm.
 * User: Simmi
 * Date: 14-10-2018
 * Time: 20:10
 */

    require 'php_connect.php';

    //    if(isset($POST['submit1'])) {
    if (isset($_POST['name']) && isset($_POST['pass'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE un='$name' AND pw='$pass'";

        if (mysqli_num_rows(mysqli_query($con, $sql)) == 1) {
            session_start();
            setcookie("token",session_id()."hello",time()+86400,"/","www.abc2.com",true);
            header("Location: page1.php");
        } else {
            //die('Error2: '.mysqli_error($con));
            echo "<script>alert('login failed' );location=\"loginpage.php\";</script>";
            //header("Location: loginpage.php?");
        }

    } else {
        echo "<script>alert('username or password field is empty');location=\"loginpage.php\";</script>";
    }
