<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-12-13
 * Time: 13:50
 */

include_once('class.TemplatePower.inc.php');



$indexTemplate = new TemplatePower("index.html");

$indexTemplate->prepare();

    $indexTemplate->printToScreen();



