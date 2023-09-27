<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération des données</title>
</head>
<body>
    <h1>Informations soumises</h1>


<?php 
     // connexion à la base de données

    //instanciation d'un objet PDO pour créer une connexion à la base de donnée
    $bddPDO = new PDO('mysql:host=localhost;dbname=database', 'root', '');
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $_requete= "SELECT * FROM enregistrement ORDER BY id ASC";
    $result = $bddPDO->query($_requete);

    if (!$result){
        echo "La récupération des données à échouer!";
    }else{
        $nbre_enregistrement = $result->rowCount();

?> 
    
    <h3>toutes les informations</h3>
    <h4>Il y'a <?=$nbre_enregistrement?> personnes enregistrées</h4>


    <table border ="1">
      
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Numéro de téléphone</th>
        <th>Adresse Email</th>
    </tr>

<?php   

while($ligne= $result->fetch(PDO::FETCH_NUM)){
    echo "<tr>";
    foreach ($ligne as $valeur) {
        echo "<td>$valeur</td>";
    }

    echo "</tr>";
}

?>

    </table>
<?php
$result->closeCursor();    

    }
?>    

    
</body>
</html>