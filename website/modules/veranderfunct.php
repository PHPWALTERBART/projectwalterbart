<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 7-1-14
 * Time: 12:13
 */

function delete($vNaam){
    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $gebruiker = $conf->prepare('DELETE FROM gebruikers WHERE username = :naam');

        $gebruiker->execute(array(
            'naam' => $vNaam

        ));


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }
}
function update($vNaam){
    switch($_POST['updatevar']){
        case "admin":
            $id = 1;
            break;
        case "member":
            $id = 2;
            break;
        case "gAdmin":
            $id = 3;
            break;
        case "pAdmin":
            $id = 4;
            break;
        case "bAdmin":
            $id = 5;
            break;
    }



    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $gebruiker = $conf->prepare('UPDATE gebruikers SET Groep_idGroep = :id WHERE username = :naam');

        $gebruiker->execute(array(
            'naam' => $vNaam,
            'id' => $id
        ));


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }
}

function ban($vNaam){
    $id = 4;

    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $gebruiker = $conf->prepare('UPDATE gebruikers SET Groep_idGroep = :id WHERE username = :naam');

        $gebruiker->execute(array(
            'naam' => $vNaam,
            'id' => $id
        ));


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }

}

