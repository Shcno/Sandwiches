<?php
    print_r($_POST);
    include_once("connection.php");
    $username="bob";
    $role=1;

    $stmt1= $conn->prepare("INSERT INTO tblusers
    (UserID, Username, Surname, Forename, Password, Year, Balance, ROLE);
    VALUES
    (NULL,:Username, :Surname, :Forename, :Password, :Year, :Balance, :Role)
    ");

    $stmt1->bindParam(":Username",$username);
    $stmt1->bindParam(":Surname",$_POST["surname"]);
    $stmt1->bindParam(":Forename",$forename);
    $stmt1->bindParam(":Password",$password;
    $stmt1->bindParam(":Username",$username);
    $stmt1->bindParam(":Username",$username);
    $stmt1->bindParam(":Username",$username);
    $stmt1->bindParam(":Username",$username);

    $stmt1->execute();
?>

#STRC 12