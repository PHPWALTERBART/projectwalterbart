<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 9-12-13
 * Time: 14:22
 */
session_start();
function kill(){
session_destroy();
    header('location:index.php');
}