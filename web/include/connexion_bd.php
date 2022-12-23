<?php
/*
 *Connexion à la base de donnée
 */

   $host = 'A REMPLIR';
   $dbname = 'A REMPLIR';
   $username = 'A REMPLIR';
   $password = 'A REMPLIR';

  
   $dsn="pgsql:host=$host;port= A REMPLIR;dbname=$dbname;user=$username;password=$password";
   try{
      $db = new PDO($dsn);

   }
   catch (PDOException $e){
      echo $e->getMessage();
   }


?>