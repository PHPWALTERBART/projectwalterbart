<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 9-1-14
 * Time: 9:16
 */

function blogpostpost(){

    if(!empty($_POST)){
        if(!empty($_POST['title']) ){
            date_default_timezone_set('Europe/Amsterdam');
            $date = date('Y/m/d h:i:s a');

            try{
                $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
                $Rsteer = $conf->prepare('INSERT INTO blog (idBlog,titel,inhoud,datum,Gebruikers_idGebruikers,status_idstatus) VALUES (null , :naam,:username,:password,:member,1)');

                $Rsteer->bindParam(':naam',$_POST['title'] , PDO::PARAM_STR);
                $Rsteer->bindParam(':username',$_POST['area'] , PDO::PARAM_STR);
                $Rsteer->bindParam(':password',$date);
                $Rsteer->bindParam(':member',$_SESSION['G_id']);
                $Rsteer->execute();


        }catch (PDOException $e){
            echo "er klopt niks van";
            die;
        }
        }
    }


}