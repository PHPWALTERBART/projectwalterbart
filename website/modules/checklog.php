<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 9-12-13
 * Time: 14:27
 */
$ini_array = parse_ini_file("global_var.ini", true);
extract($ini_array);
extract($permis);



function admincheck(){
    global $user;
    global $admin;
    global $location_back;
    if($_SESSION[$user] !== $admin){
        header($location_back);
        die;

    }else{

    }
}
function modcheck(){
    global $user;
    global $mod;
    global $location_back;
    if($_SESSION[$user] !== $mod){
        header($location_back);
        die;

    }else{

    }
}
function membercheck(){
    global $user;
    global $member;
    global $location_back;
    if($_SESSION[$user] !== $member){
        header($location_back);
        die;

    }else{

    }
}