<?php
/*
if (isset($_POST['produit']) && isset($_POST['categorie'])) {
    // on affiche nos résultats 
  
echo 'le produit est:'.$_POST['produit'].' et sa catégorie  est : '.$_POST['categorie'];*/

//var_dump($_POST);
include 'connect_BD.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table >  
         <tr>
            <td>
                 <?php echo $_POST['produit'] ?>
            </td>
        
        
            <td>
                 <?php echo $_POST['categorie'] ?>
            </td>
        
        
            <td>
                  <?php echo $_POST['prixunitaire'] ?>
            </td>
        
    
            <td>
                  <?php echo $_POST['montant'] ?>
            </td>
        
        
            <td>
                 <?php echo $_POST['date'] ?>
            </td>
        </tr>   
     
    </table>
</body>
</html>











