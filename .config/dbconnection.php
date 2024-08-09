<?php
   $dsn = 'mysql:host=localhost;dbname=uptimisedph;charset=utf8';
   $username = 'root';
   $password = '';

   try {

      $pdo = new PDO($dsn, $username, $password);
      
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo "connection success";

   } catch (PDOException $e) {

      echo "Connection failed: " . $e->getMessage();
      
   }
?>
