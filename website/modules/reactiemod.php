<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 8-1-14
 * Time: 13:44
 */

function reactie($idpost,$tpl){
    include_once("templatepower/class.TemplatePower.inc.php");
    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $reactie = $conf->prepare('SELECT * FROM reacties WHERE Blog_idBlog = :reactie ORDER BY idReacties DESC ');

        $reactie->execute(array(
            'reactie'=>$idpost
        ));


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }
    $reactieprint = 0;

    while ($reactieprint = $reactie->fetch(PDO::FETCH_ASSOC)){
        $tpl->newBlock("reactieblog");
        $tpl->assign( "reactieb", $reactieprint['inhoud']);
    }
    $tpl->assign( "idblog", $idpost);


}
