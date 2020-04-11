<?php

$clef = $_GET['clef'];
$valeur = $_GET['valeur'];

// Ouvril la connexion avec PDO
//Data Source Name

$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$reponse = $bdd->query("SELECT 'libelle' FROM 'produit' WHERE $clef = ['valeur'] ", PDO::FETCH_ASSOC);
$reponse = $bdd->query("INSERT INTO 'categorie' VALUES(4,'agroalimentaire')");
//$donnees = $reponse->fetch();



?>


<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reponse-BD</title>
</head>

<style media="screen">
    h1{
        text-decoration: underline;
    }
    table{
        margin: 1rem auto;
        width: 80vw;
    }
    thead{
        background-color: #333;
        color: #FFF;
    }
    td{
        padding: 1rem;
    }
    tr{
        border: 1px;
    }
    h1{
        text-align: center;
    }
    form{
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: 500px;
        
    }
</style>
<body>
    <h1>Vous venez d'enregistré :</h1>
    <hr>
    <table>
        <thead>
            <td>produit</td>
            <td>libellé</td>
            <td>prix unitaire</td>
            <td>Categorie</td>              
        </thead>
   
    
   <?php  foreach($reponse as $items){  ?> 
         <tr>
            <td>
            <?php echo $items['id_produit']; ?>
            </td>
         </tr>
         <tr>
             <td>
            <?php echo $items['libelle']; ?>
            </td>
         </tr>
         { <?php }  ?>

    </table>
      
</body>
</html>



