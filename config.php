<?php
///////// connect with  DB //////////////
    session_start();
      $server = 'localhost';
      $username = 'root';
      $password = '';
      $basededonné = 'gamingclub2';

      $conn = new mysqli ($server, $username, $password, $basededonné );

      if($conn->connect_error)
        {
          die('Connection failed: '. $conn->connect_error);
        }


?>