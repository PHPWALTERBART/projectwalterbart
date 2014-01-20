<?php
/**
 * Created by Monstersoft.
 * User: Walter Wiesnekker
 * Date: 28-11-13
 * Time: 20:36
 */
    session_start();

    $ini_array = parse_ini_file("global_var.ini", true);
    extract($ini_array);
    extract($inlog);
    extract($dbinlog);
    extract($registreer);






function inlog(){
    global $u_username;
    global $u_password;
    global $Groep_idGroep;
    global $location_inlog;
    $u_password = $_POST[$u_password];
    $u_password = sha1($u_password);

    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $gebruiker = $conf->prepare('SELECT * FROM gebruikers WHERE username = :naam AND password = :pass ');

        $gebruiker->execute(array(
            'naam' => $_POST[$u_username],
            'pass' => $u_password
        ));


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }


    $row = $gebruiker->fetch(PDO::FETCH_ASSOC);



   if(!empty($row)){
       $idGebruikers = 0;
        extract($row);
        $_SESSION['id'] = $Groep_idGroep;
        $_SESSION['G_id'] = $idGebruikers;

        switch($Groep_idGroep){
            case "1":
                header($location_inlog);
                break;
            case "2":
                header('location:member.php');
                break;
            case "3":
                header('location:gAdmin.php');
                break;
            case "4":
                header('location:pAdmin');
                break;
            case "5":
                header('location:bAdmin');
                break;
        }
    }else{
        echo "iets is er niet juist";
        echo $u_password;
    }
}










function registreer(){
    global $rUsername;
    global $rPassword;
    global $rPassword2;

    try{
        $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
        $gebruiker = $conf->prepare('SELECT * FROM gebruikers WHERE username = :naam');

        $gebruiker->execute(array(
            'naam' => $_POST['username']
        ));


    }catch (PDOException $e){
        echo "er klopt niks van";
        die;
    }
    $check = $gebruiker->fetch(PDO::FETCH_ASSOC);
    if(empty($check)){

    if($_POST[$rPassword] == $_POST[$rPassword2] AND !empty($_POST['username']) AND !empty($_POST['rNaam']) AND !empty($_POST['email']) ){

        $rPassword = sha1($_POST[$rPassword]);
         $null = null;
        $username = $_POST['username'];
        $naam = $_POST['rNaam'];
        $email = $_POST['email'];
        try{
            $conf = new PDO('mysql:host=localhost;dbname=portfolio;',"root");
            $Rsteer = $conf->prepare('INSERT INTO gebruikers (idGebruikers,naam,username,password,email,Groep_idGroep) VALUES (:null , :naam,:username,:password,:email,2)');
            $Rsteer->bindParam(':null',$null);
            $Rsteer->bindParam(':naam',$naam , PDO::PARAM_STR);
            $Rsteer->bindParam(':username',$username , PDO::PARAM_STR);
            $Rsteer->bindParam(':password',$rPassword);
            $Rsteer->bindParam(':email',$email , PDO::PARAM_STR);
            $Rsteer->execute();


        }catch (PDOException $e){
            echo "er klopt niks van";
            die;
        }
        header('location:index.php');

    }else{
        print "you are gay";
    }
    }else{
        echo('de gebruikersnaam bestaat al');
    }

}


