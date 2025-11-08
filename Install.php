<?php
    #create variables with server details on
    $servername="localhost";
    $username="root";
    $password="Password";

    $conn=new PDO("mysql:host=$servername",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="CREATE DATABASE IF NOT EXISTS Sandwiches"
    $connn->exec($sql);
    ?>