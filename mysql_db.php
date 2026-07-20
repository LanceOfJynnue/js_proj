<?php
    $hname = 'localhost';
    $uname = 'test';
    $pass = '102402Lance~';
    $db = 'phpsql_db';
    
    // Create connection
 
    $con = mysqli_connect($hname, $uname, $pass, $db);
     
    // Check connection
     
    if (!$con) {
     
        die("Connection failed: " . mysqli_connect_error());
     
    }
?>