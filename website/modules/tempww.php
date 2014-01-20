<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 7-1-14
 * Time: 14:38
 */


function wwvergeten($vNaam){
    $pass = rand(10,10000000);
    $pass2 = sha1($pass);
    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $gebruiker = $conf->prepare('UPDATE gebruikers SET password = :password, WHERE username = :naam');

        $gebruiker->execute(array(
            'naam' => $vNaam,
            'password' => $pass2
        ));


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }
    echo '<script language="javascript">';
    echo 'alert("the new password is send to you")';
    echo '</script>';
}