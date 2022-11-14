<?php
    
    //CONNECT TO MYSQL DATABASE USING MYSQLI


 
                $dbname = "library";
                $conn = new mysqli("localhost","root","",$dbname);

                // Check connection
                if ($conn-> connect_error) {
                  echo "Failed to connect to MySQL: " . $conn-> connect_error;
                  exit();
                }  
?>