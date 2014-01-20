<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 15-12-13
 * Time: 14:52
 */

include('modules/inlog_registreer.php');



if($_POST['rwpost']=='inlog'){
    inlog();
}else{
    registreer();
}

