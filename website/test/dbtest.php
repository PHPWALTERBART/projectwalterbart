<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-12-13
 * Time: 13:11
 */



try{
    $conf = new PDO('mysql:host=localhost;dbname=test2;',"root");
    $test = $conf->prepare('SELECT naam FROM gegevens');

    $test->execute();

}catch (PDOException $e){
    echo "er klopt niks van";
    die;
}

$row = $test->fetchAll(PDO::FETCH_ASSOC);

var_dump($row);