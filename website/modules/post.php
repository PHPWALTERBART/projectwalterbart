<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 8-1-14
 * Time: 14:27
 */



function post($tpl){
    include ('modules/reactiemod.php');
    include_once("templatepower/class.TemplatePower.inc.php");
    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $blog = $conf->prepare('SELECT inhoud,idBlog FROM blog ORDER BY idBlog DESC ');

        $blog->execute();


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }

    $blogpost = 0;
    while($blogpost = $blog->fetch(PDO::FETCH_ASSOC))
    {


        $tpl->newBlock("postblog");
        $tpl->assign( "postb",$blogpost['inhoud']);

        reactie($blogpost['idBlog'], $tpl);
        $tpl->assign( "idblog",$blogpost['idBlog']);


    }
}