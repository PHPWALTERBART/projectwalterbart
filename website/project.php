<?php
/**
 * Created by PhpStorm.
 * User: walter
 * Date: 16-1-14
 * Time: 9:54
 */


include('modules/checklog.php');
include('modules/beheerder.php');
include('modules/projectophaal.php');


include_once("templatepower/class.TemplatePower.inc.php");

$tpl = new TemplatePower( "templates/project.html" );


$tpl->prepare();
    if(empty($_GET)){
        $tpl->newBlock("begin");
    }else{
        if( isset($_GET['home'])){
            header('location:project.php');
        }else{
            $test = $_GET['nummer'];

            project($tpl,$test);
        }

    }
pNav($tpl);
$tpl->printToScreen();



