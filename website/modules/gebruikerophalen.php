<?php
/**
 * Created by PhpStorm.
 * User: walter
 * Date: 15-1-14
 * Time: 11:13
 */

function ophaal($tpl){
    include_once("templatepower/class.TemplatePower.inc.php");


    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $gebruiker = $conf->prepare('SELECT ge.idGebruikers, ge.username,g.naam FROM gebruikers AS ge, groep AS g WHERE ge.Groep_idGroep = g.idGroep ORDER BY g.naam ASC ');

        $gebruiker->execute();


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }

    while($row = $gebruiker->fetch(PDO::FETCH_ASSOC))
    {


        $tpl->newBlock("naamspace");
        $tpl->assign( "name", $row['username']);


    }

}