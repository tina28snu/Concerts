<?php

    require_once('./config.php');
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);

    $id = $_POST['id'];
    $groupe = $_POST['groupe'];
    $lieu = $_POST['lieu'];
    $date = $_POST['date'];
    
    $resUpdate = "UPDATE concert SET groupe=:groupe, lieu=:lieu, date=:date WHERE id=:id";

    $stmtUpdate = $pdo->prepare ($resUpdate);
    $stmtUpdate->bindValue(":id",$id);
    $stmtUpdate->bindValue(":groupe",$groupe);
    $stmtUpdate->bindValue(":lieu",$lieu);
    $stmtUpdate->bindValue(":date",$date);
                
    if ($stmtUpdate->execute()) {
        $msg = "Edit done!";
    }
    else {
         $msg = "Problem edit!";
    }

    header ("location: ./recherche.php?message=".$msg);
        