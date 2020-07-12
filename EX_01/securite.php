<?php
   

   function connect_to_base-site-rooting(){
   $servername="localhost";
   $username="root";
   $databasename="basetest01";
   $password="";
   
   try {
       $pdo= new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
       $pdo->setAttribute (PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
   
       echo "Connected successfully";
       return $pdo;
   } catch (PDOException $e){
       echo "Connection failed: ". $e->getMessage();
   }
   }
   
   $pdo=connect_to_base-site-rooting();  
     
    
     $_SESSION["id"]= $_POST["login"];
     header ('location: mini-site-routing.php?page=1');
     exit();
    }
    else {
        echo 'Mauvais couple identifiant / mot de passe.';
        echo  "<a href= 'mini-site-routing.php?page=connexion'> Reconnexion</a>";
    }
   }
  
 
   ?>