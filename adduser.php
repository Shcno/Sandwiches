<?php
    header("Location: users.php")
    print_r($_POST);
    include_once("connection.php");
    $username=$_POST["surname"].".".$_POST["forename"][0];
    //$username="bob";
    if($_POST["role"]=="pupil"){
        $role=0;
    }else{
        $role=1;
    }


    $stmt1= $conn->prepare("INSERT INTO tblusers
    (UserID, Username, Surname, Forename, Password, Year, Balance, ROLE);
    VALUES
    (NULL,:Username, :Surname, :Forename, :Password, :Year, :Balance, :Role)
    ");

    $stmt1->bindParam(":Username",$username);
    $stmt1->bindParam(":Forename",$_POST["surname"]);
    $stmt1->bindParam(":Password",$_POST["forename"]);
    $stmt1->bindParam(":Username",$_POST["password"]);
    $stmt1->bindParam(":Username",$_POST["year"]);
    $stmt1->bindParam(":Username",$_POST["Balance"]);
    $stmt1->bindParam(":Role",$role);

    $stmt1->execute();
?>

