<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recherche Concert</title>
</head>
<body>
   
                
                <?php
                 
                    require_once('./config.php');
                    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
    
                    $resLieu = $pdo->query('SELECT DISTINCT lieu FROM concert ORDER BY lieu');
                    $resLieu->setFetchMode(PDO::FETCH_ASSOC);  
                    $tableauLieu = $resLieu->fetchAll();
                
                    $resGroup = $pdo->query('SELECT DISTINCT groupe FROM concert ORDER BY groupe');
                    $resGroup->setFetchMode(PDO::FETCH_ASSOC);  
                    $tableauGroup = $resGroup->fetchAll();
                
                    $resJour = $pdo->query('SELECT DISTINCT DATE(date) AS day FROM concert ORDER BY date');
                    $resJour->setFetchMode(PDO::FETCH_ASSOC);  
                    $tableauJour = $resJour->fetchAll();
                ?>
                
                
        <?php
            
            if (isset($_GET['message'])) {
                print $_GET['message'];
            }
            
        ?>
        
        <h1>Concerts October 2016</h1>
        
        <br>
        <br>
                
        <form action="./recherche.traitement.php" method="post">
            <fieldset>
                <legend>Search by Venue</legend>
                        Venue <select id="lieu" name="lieu">
                               <option value="all">All</option>
                            <?php
              
                                foreach ($tableauLieu as $ligne) {
                                    print "<option value='" . $ligne['lieu'] . "'>". $ligne['lieu']."</option>";
                                };
                            ?>
                        </select>
                        <input type="submit">
            </fieldset>
        </form>            
        
        <br><br>                
                        
        <form action="./recherche.traitement.php" method="post">
            <fieldset>
                <legend>Search by Group</legend>                
                        Group <select id="groupe" name="groupe">
                               <option value="all">All</option>
                            <?php
              
                                foreach ($tableauGroup as $ligne) {
                                    print "<option value='" . $ligne['groupe'] . "'>". $ligne['groupe']."</option>";
                                };
                            ?>
                        </select>
                        <input type="submit">
                        
          </fieldset>
        </form>  
    
        <br><br>
        
        <form action="./recherche.traitement.php" method="post">
            <fieldset>
                <legend>Search by Date</legend>                
                        Day <select id="day" name="day">
                               <option value="all">All</option>
                            <?php
              
                                foreach ($tableauJour as $ligne) {
                                    print "<option value='" . $ligne['day'] . "'>". $ligne['day']."</option>";
                                };
                            ?>
                        </select>
                        <input type="submit">
                        
          </fieldset>
        </form>         
        
                       
                        

                        
                   
            
        
        
</body>
</html>
   