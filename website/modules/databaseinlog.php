<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 3-12-13
 * Time: 9:41
 */
$ini_array = parse_ini_file("../variable/global_var.ini", true);
extract($ini_array);
extract($dbinlog);
function databaseinlog(){
    global $dbnaam;
    global $dbpassword;


    try{
        $conf = new PDO('msql:host=localhost;dbname=test2;',$dbnaam,$dbpassword);
    }catch (PDOException $e){
        die;
    }


}
