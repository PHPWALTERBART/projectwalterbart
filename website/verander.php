<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 7-1-14
 * Time: 12:13
 */
extract($_POST);
include('modules/veranderfunct.php');



if($_POST['wat'] == 'delete'){
   delete($vNaam);
    header('location:go.php');
}elseif($_POST['wat'] == 'update'){
   update($vNaam);
    header('location:go.php');
}elseif($_POST['wat'] == 'ban'){
    ban($vNaam);
    header('location:go.php');
}