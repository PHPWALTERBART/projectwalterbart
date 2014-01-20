<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 21-12-13
 * Time: 22:11
 */


include('templatepower/class.TemplatePower.inc.php');

function gebruikers($tpl){
    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $gebruiker = $conf->prepare('SELECT username FROM gebruikers ');

        $gebruiker->execute();


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }

    while($row = $gebruiker->fetch(PDO::FETCH_ASSOC)){
        $tpl->newBlock('GEBRUIKER');
        $tpl->assign('naam',$row['username']);
    }


}
