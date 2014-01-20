<?php
/**
 * Created by PhpStorm.
 * User: walter
 * Date: 16-1-14
 * Time: 10:45
 */

function project($tpl,$test){
    include_once("templatepower/class.TemplatePower.inc.php");
    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $project = $conf->prepare('SELECT * FROM projecten AS p, onderdelen AS o WHERE p.idProjecten = :project AND o.Projecten_idProjecten = :pOnder');

        $project->execute(array(
            "project"=>$test,
            "pOnder"=>$test
        ));


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }

    $pProject = $project->fetch(PDO::FETCH_ASSOC);




    $tpl->newBlock("pContent");
    $tpl->assign( "pNaam", $pProject['naam']);
    $tpl->assign( "pBeschrijving", $pProject['beschrijving']);
    $tpl->assign( "pBeschrijving", $pProject['beschrijving']);


}


function pNav($tpl){
    include_once("templatepower/class.TemplatePower.inc.php");

    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $nav = $conf->prepare('SELECT naam,idProjecten  FROM projecten ORDER BY idProjecten DESC ');

        $nav->execute();


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }

    $navbar = 0;
    while($navbar = $nav->fetch(PDO::FETCH_ASSOC))
    {

        $tpl->newBlock("pMenu");
        $tpl->assign( "projectnaam", $navbar['naam']);
        $tpl->assign( "pId", $navbar['idProjecten']);

    }


}