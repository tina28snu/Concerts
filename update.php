<?php

    require_once('./config.php');
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $resDel = "DELETE FROM concert WHERE id=:id";
        $stmtDel = $pdo->prepare ($resDel);
        $stmtDel->bindValue(":id",$id);
        if ($stmtDel->execute()) {
            $msg = "The concert has been deleted!";
        }
        else {
            $msg = "Problem with the delete!";
        }

        header ("location: ./recherche.php?message=".$msg);
    }



    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $resShow = "SELECT * FROM concert WHERE id=:id";
        
        $stmtShow = $pdo->prepare ($resShow);
        $stmtShow->bindValue(":id",$id);
                
        if ($stmtShow->execute()) {
            $tableauShow = $stmtShow->fetchAll();
            foreach ($tableauShow as $row) {
                $groupe = $row['groupe'];
                $lieu = $row['lieu'];
                $date = $row['date'];
                print '<form action="./update.traitement.php" method="post">
                        Id ' . $id . '<br>
                        <input type="hidden" name="id" value="' . $id . '"><br>
                        Group <input type="text" name="groupe" value="' . $groupe . '"><br><br>
                        Venue <input type="text" name="lieu" value="' . $lieu . '"><br><br>
                        Date <input type="date" name="date" value="' . $date . '"><br><br>
                        <input type="submit">
                        </form>';
            }
        }
        else {
             print "Problem connexion!";
             var_dump ($stmtShow->errorInfo());
        }  
    }

    
    
?>
