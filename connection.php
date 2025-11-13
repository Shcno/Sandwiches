<?php
    $servername="localhost";
    $username="root";
    $password="Password";
    $dbname="Sandwiches"

    $conn=new PDO("mysql:host=$servername",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo("connected ok")
?>