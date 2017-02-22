<?php

    require_once('./config.php');
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);

    print "<h1>Concerts October 2016</h1>";
    

    if (isset($_POST['groupe'])) {
        $groupe = $_POST['groupe'];
        if ($groupe == "all") {
            $resGroupe = "SELECT * FROM concert ORDER BY groupe";
            $stmtGroupe = $pdo->prepare ($resGroupe);
            $stmtGroupe->bindValue(":groupe",$groupe);
            if ($stmtGroupe->execute()) {
                $tableauGroupe = $stmtGroupe->fetchAll();
                print "<h2>Groupe: " . $groupe . "</h2>";
                print "<a href='./recherche.php'>Back to Search</a><br><br><br>";
                print '<table><tr><th></th><th>Group</th><th>Venue</th><th>Date</th><th>Edit</th><th>Delete</th>';
                foreach ($tableauGroupe as $row) {
                    print '<form action="./update.php" method="post"><tr><td><input type="hidden" name="id" value="' . $row['id'] . '"></td><td>' .  $row['groupe'] . '</td><td>' . $row['lieu'] . '</td><td>' . $row['date'] . '</td><td><button type="submit" name="edit" value="edit"><img src="./img/edit.png" alt="edit"></button></td><td><button type="submit" name="delete" value="delete"><img src="./img/delete.png" alt="edit"></button></td></tr></form>';
                }
                print '</table>';
            }
            else {
                print "Problem search!";
                var_dump ($stmtGroupe->errorInfo());
            }
        }
        else {
            $resGroupe = "SELECT * FROM concert WHERE groupe=:groupe ORDER BY groupe";
            $stmtGroupe = $pdo->prepare ($resGroupe);
            $stmtGroupe->bindValue(":groupe",$groupe);
            
            if ($stmtGroupe->execute()) {
                $tableauGroupe = $stmtGroupe->fetchAll();
                print "<h2>Groupe: " . $groupe . "</h2>";
                print "<a href='./recherche.php'>Back to Search</a><br><br><br>";
                print '<table><tr><th></th><th>Group</th><th>Venue</th><th>Date</th><th>Edit</th><th>Delete</th>';
                foreach ($tableauGroupe as $row) {
                    print '<form action="./update.php" method="post"><tr><td><input type="hidden" name="id" value="' . $row['id'] . '"></td><td>' .  $row['groupe'] . '</td><td>' . $row['lieu'] . '</td><td>' . $row['date'] . '</td><td><button type="submit" name="edit" value="edit"><img src="./img/edit.png" alt="edit"></button></td><td><button type="submit" name="delete" value="delete"><img src="./img/delete.png" alt="edit"></button></td></tr></form>';
                }
                print '</table>';
            }
            else {
                print "Problem search!";
                var_dump ($stmtGroupe->errorInfo());
            }
        }
    }


    if (isset($_POST['lieu'])) {
        $lieu = $_POST['lieu'];
        if ($lieu == "all") {
            $resLieu = "SELECT * FROM concert ORDER BY lieu";
            $stmtLieu = $pdo->prepare ($resLieu);
            $stmtLieu->bindValue(":lieu",$lieu);

            if ($stmtLieu->execute()) {
                $tableauLieu = $stmtLieu->fetchAll();
                print "<h2>Venue: " . $lieu . "</h2>";
                print "<a href='./recherche.php'>Back to Search</a><br><br><br>";
                print '<table><tr><th></th><th>Group</th><th>Venue</th><th>Date</th><th>Edit</th><th>Delete</th>';
                foreach ($tableauLieu as $row) {
                    print '<form action="./update.php" method="post"><tr><td><input type="hidden" name="id" value="' . $row['id'] . '"></td><td>' .  $row['groupe'] . '</td><td>' . $row['lieu'] . '</td><td>' . $row['date'] . '</td><td><button type="submit" name="edit" value="edit"><img src="./img/edit.png" alt="edit"></button></td><td><button type="submit" name="delete" value="delete"><img src="./img/delete.png" alt="edit"></button></td></tr></form>';
                }
                print '</table>';
            }
            else {
                print "Problem search!";
                var_dump ($stmtLieu->errorInfo());
            }
        }
        else {
            $resLieu = "SELECT * FROM concert WHERE lieu=:lieu ORDER BY groupe";
            $stmtLieu = $pdo->prepare ($resLieu);
            $stmtLieu->bindValue(":lieu",$lieu);

            if ($stmtLieu->execute()) {
                $tableauLieu = $stmtLieu->fetchAll();
                print "<h2>Venue: " . $lieu . "</h2>";
                print "<a href='./recherche.php'>Back to Search</a><br><br><br>";
                print '<table><tr><th></th><th>Group</th><th>Venue</th><th>Date</th><th>Edit</th><th>Delete</th>';
                foreach ($tableauLieu as $row) {
                    print '<form action="./update.php" method="post"><tr><td><input type="hidden" name="id" value="' . $row['id'] . '"></td><td>' .  $row['groupe'] . '</td><td>' . $row['lieu'] . '</td><td>' . $row['date'] . '</td><td><button type="submit" name="edit" value="edit"><img src="./img/edit.png" alt="edit"></button></td><td><button type="submit" name="delete" value="delete"><img src="./img/delete.png" alt="edit"></button></td></tr></form>';
                }
                print '</table>';
            }
            else {
                print "Problem search!";
                var_dump ($stmtLieu->errorInfo());
            }
        }
    }



    if (isset($_POST['day'])) {
        $day = $_POST['day'];
        if ($day == "all") {
            $resDate = "SELECT * FROM concert ORDER BY date";
            $stmtDate = $pdo->prepare ($resDate);
            $stmtDate->bindValue(":date",$day);
            
            if ($stmtDate->execute()) {
                $tableauDate = $stmtDate->fetchAll();
                print "<h2>Date: " . $day . "</h2>";
                print "<a href='./recherche.php'>Back to Search</a><br><br><br>";
                print '<table><tr><th></th><th>Group</th><th>Venue</th><th>Date</th><th>Edit</th><th>Delete</th>';
                foreach ($tableauDate as $row) {
                    print '<form action="./update.php" method="post"><tr><td><input type="hidden" name="id" value="' . $row['id'] . '"></td><td>' .  $row['groupe'] . '</td><td>' . $row['lieu'] . '</td><td>' . $row['date'] . '</td><td><button type="submit" name="edit" value="edit"><img src="./img/edit.png" alt="edit"></button></td><td><button type="submit" name="delete" value="delete"><img src="./img/delete.png" alt="edit"></button></td></tr></form>';
                }
                print '</table>';
            }
            else {
                print "Problem search!";
                var_dump ($stmtDate->errorInfo());
            }
        }
        else {
            $resDate = "SELECT * FROM concert WHERE DATE(date) LIKE :date ORDER BY groupe";
            $stmtDate = $pdo->prepare ($resDate);
            $stmtDate->bindValue(":date",$day);
            
            if ($stmtDate->execute()) {
                $tableauDate = $stmtDate->fetchAll();
                print "<h2>Date: " . $day . "</h2>";
                print "<a href='./recherche.php'>Back to Search</a><br><br><br>";
                print '<table><tr><th></th><th>Group</th><th>Venue</th><th>Date</th><th>Edit</th><th>Delete</th>';
                foreach ($tableauDate as $row) {
                    print '<form action="./update.php" method="post"><tr><td><input type="hidden" name="id" value="' . $row['id'] . '"></td><td>' .  $row['groupe'] . '</td><td>' . $row['lieu'] . '</td><td>' . $row['date'] . '</td><td><button type="submit" name="edit" value="edit"><img src="./img/edit.png" alt="edit"></button></td><td><button type="submit" name="delete" value="delete"><img src="./img/delete.png" alt="edit"></button></td></tr></form>';
                }
                print '</table>';
            }
            else {
                print "Problem search!";
                var_dump ($stmtDate->errorInfo());
            }
        }
    }

    
?>
<style>
    table {
        border-collapse: collapse;
        clear: both;
    }
    th, td {
        border: 1px solid red;
        text-align: center;
        padding: 10px;
    }
    a {
        text-decoration: none;
        margin-left: 50px;
    }
</style>

