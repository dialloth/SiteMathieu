  
<?php

    function ConnexionPDO(){
        try {  
        $bdd = new PDO("mysql:host=".HOST_Name. ";dbname=".DATABASE_Name.";charset=utf8",USER_Name, PASSWORD );
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $bdd;
      }catch(PDOexception $e){
        $message = "Erreur PDO ".$e->getmessage();
        die($message);
      }
    }
?>


            
      