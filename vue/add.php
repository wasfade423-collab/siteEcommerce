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
            if(isset($_message)){
                echo "<div>".htmlspecialchars($message)."</div>";
                unset($message);
            }""
        ?>
    <form action="" method="post" enctype="multipart/form-data">
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
        <div class="p-4 border rounded-lg bg-gray-50">
            <label class="block mb-2 font-bold text-gray-700">Couleurs disponibles :</label>
            
            <div id="liste-checkbox-couleurs" class="grid grid-cols-2 gap-2 mb-4">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="couleurs[]" value='{"nom":"Noir","value":"black"}' class="w-4 h-4">
                    <span>Noir</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="couleurs[]" value='{"nom":"Blanc","value":"white"}' class="w-4 h-4">
                    <span>Blanc</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="couleurs[]" value='{"nom":"Rouge","value":"red"}' class="w-4 h-4">
                    <span>Rouge</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="couleurs[]" value='{"nom":"Bleu","value":"blue"}' class="w-4 h-4">
                    <span>Bleu</span>
                </label>
            </div>

            <div class="flex gap-2 border-t pt-4">
                <input type="text" id="new-color-name" placeholder="Nom (ex: Argent)" class="border p-1 text-sm rounded w-full">
                <input type="color" id="new-color-value" class="h-8 w-12 cursor-pointer">
                <button type="button" onclick="ajouterCouleurManuelle()" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                    + Ajouter
                </button>
            </div>
        </div>

        <!--image-->
        <input type="file" name="cartImg" id="img">
        <input type="submit" value="Valider">
    </form>
    <script>
        function ajouterCouleurManuelle() {
        const nom = document.getElementById('new-color-name').value;
        const valeur = document.getElementById('new-color-value').value;
        const conteneur = document.getElementById('liste-checkbox-couleurs');

    if (nom.trim() === "") {
        alert("Donnez un nom à la couleur");
        return;
    }

    // On crée l'objet JSON comme pour les autres
    const objetCouleur = JSON.stringify({ nom: nom, value: valeur });

    const div = document.createElement('label');
    div.className = "flex items-center gap-2 cursor-pointer animate-pulse";
    div.innerHTML = `
        <input type="checkbox" name="couleurs[]" value='${objetCouleur}' checked class="w-4 h-4">
        <span class="font-semibold text-blue-600">${nom}</span>
        <div class="w-3 h-3 rounded-full" style="background-color: ${valeur}"></div>
    `;

    conteneur.appendChild(div);
    document.getElementById('new-color-name').value = ""; // Reset
}
    </script>
</body>
</html>