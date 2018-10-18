<?php
    session_start();
/**
 * Created by PhpStorm.
 * User: it16174290
 * Date: 07/08/2018
 * Time: 20:20
 */
    session_destroy();
    header("Location: loginpage.php");