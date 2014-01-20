<?php
/**
 * Created by Monstersoft.
 * User: Walter Wiesnekker
 * Date: 28-11-13
 * Time: 12:16
 */
include('modules/checklog.php');
include('modules/beheerder.php');
include('modules/blogpost.php');
include('modules/reactiepost.php');
include('modules/post.php');
include('modules/gebruikerophalen.php');
session_start();
admincheck();

include_once("templatepower/class.TemplatePower.inc.php");

$tpl = new TemplatePower( "templates/go.html" );


if(isset($_POST['blogpost'])){
    blogpostpost();
}elseif(isset($_POST['reactie'])){
    reactiepost();

}

$tpl->prepare();




post($tpl);
ophaal($tpl);

$count = 0;
$row = 0;



$tpl->gotoBlock( "_ROOT" );
$tpl->assign( "total_names", $count );

$tpl->printToScreen();



