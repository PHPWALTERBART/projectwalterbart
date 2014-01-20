<?php

include_once('templatepower/class.TemplatePower.inc.php');
include('modules/inlog_registreer.php');


$indexTemplate = new TemplatePower( "templates/index.html" );

$indexTemplate->prepare();


$indexTemplate->printToScreen();











