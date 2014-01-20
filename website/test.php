<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 8-1-14
 * Time: 9:09
 */


include('modules/checklog.php');
include('modules/beheerder.php');
include('modules/blogpost.php');
include('modules/reactiepost.php');
include('modules/post.php');


include_once("templatepower/class.TemplatePower.inc.php");

$tpl = new TemplatePower( "templates/test.html" );

if(isset($_POST['blogpost'])){
    blogpostpost();
}elseif(isset($_POST['reactie'])){
    reactiepost();

}

$tpl->prepare();

post($tpl);

$tpl->printToScreen();



