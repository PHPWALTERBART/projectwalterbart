<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 9-1-14
 * Time: 14:41
 */

function reactiepost(){
            print($_POST['inhoud']);
            print($_POST['reactienummer']);

            date_default_timezone_set('Europe/Amsterdam');
            $date = date('Y/m/d h:i:s a');

            $null = null;

            try{
                $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
                $Rsteer = $conf->prepare('INSERT INTO reacties (idReacties,inhoud,datum,Gebruikers_idGebruikers,Blog_idBlog) VALUES (null , :naam,:username,11,1)');
                $Rsteer->bindParam(':naam',$_POST['inhoud'] , PDO::PARAM_STR);
                $Rsteer->bindParam(':username',$date);

                $Rsteer->execute();

                $Rsteer->execute();


            }catch (PDOException $e){
                echo "er klopt niks van";
                die;
            }
            print($date);

}
