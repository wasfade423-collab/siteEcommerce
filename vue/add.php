<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sortie.css">
</head>
<body>
        <?php
            if(isset($_SESSION['message'])){
                echo "<div>".htmlspecialchars($_SESSION['message'])."</div>";
                unset($_SESSION['message']);
            }
        ?>
    <form action="../controller/controllerAdmin.php?add=add" method="post" enctype="multipart/form-data">
        <!--nom-->
        <label for="nom">Nom du produit</label>
        <input type="text" id="nomP" name="nomP" placeholder="Nom du produit">
        
        <!--status-->
        <label for="status">Status</label>
        <input type="radio" id="new" name="status" value="Nouveau">
        <label for="new">Nouveau</label>

        <input type="radio" id="popular" name="status" value="Populaire">
        <label for="popular">Populaire</label>
        
        <input type="radio" id="limit" name="status" value="Limité">
        <label for="limit">Limité</label>  
        
        <!--prix-->
        <label for="nom">Pix en XOF</label>
        <input type="number" id="prix" name="prix" placeholder="Prix">   

        <!--etoiles-->
        <label for="nom">Sur 5 étoiles à combien estimez-vous :</label>
        <input type="number" id="nbreyellow" name="nbreyellow" placeholder="les jaunes">    
        
        <input type="number" id="nbreboth" name="nbreboth" placeholder="les intermédiaires"> 
        
        <input type="number" id="nbrevide" name="nbrevide" placeholder="les vides">
        
        <!--description-->
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="2" style="resize: vertical;"></textarea>

        <!--couleur-->
        <label for="color">Les couleurs disponibles</label>

        <!--image-->
        <input type="file" name="cartImg" id="img">
        <input type="submit" value="Valider">
    </form>
</body>
</html>