<?php

    $host = "localhost";

    $dbname = "auth-sys";

    $user = "root";

    $pass = "";
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

    if( $conn == true ) {
        echo"it is working fine";
    }else{
        echo "connection is wrong:err";
    }