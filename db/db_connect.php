<?php

    //Establishes connection to MySQL database
    function dbConnection(){
        
        $hostname = '127.0.0.1';
        $user = 'root';
        $pass = 'mdl35it490';
        $dbname = 'Sub_Service';
        
        $connection = mysqli_connect($hostname, $user, $pass, $dbname);
        
        if (!$connection){
            echo "Error connecting to database: ".$connection->connect_errno.PHP_EOL;
            exit(1);
        }
        echo "Connection established to database".PHP_EOL;
        return $connection;
    }
?>