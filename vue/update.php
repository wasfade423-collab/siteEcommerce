<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sortie.css">
</head>
<body>
    <form action="../controller/controllerAdmin.php?id=<?= $toupdate ?>" method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
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

        <!--image-->
        <input type="file" name="cartImg" id="img">
        
        <!--couleur-->
        <label for="color" id="clrs">Les couleurs disponibles</label>
        <div><input type="checkbox" name="green" id="green" value="green"><label for="green">Vert</label></div>
        <input type="submit" value="Valider">
        <a href=" ../index.php?admin=me&dash=true"></a>

    </form>
    <script>
        let inputs = document.querySelectorAll('input');
        let prix = document.getElementById('prix');
        let description = document.querySelector('textarea');
        let select = document.getElementById('clrs');
        let couleurs = [];
        async function produit(){
            const requete = await fetch('controller/controllerAdmin.php?id=<?= $toupdate ?>')
            const article = await requete.json();
            // console.log(article);
            inputs[0].value = article.cartName;

            switch (article.status){
                case "Nouveau" : {
                    inputs[1].selected = true;
                    inputs[1].checked = true;
                    break;
                }
                case "Populaire" : {
                    inputs[2].selected = true;
                    inputs[2].checked = true;
                    break;
                }
                case "Limité" : {
                    inputs[3].selected = true;
                    inputs[3].checked = true;
                    break;
                }
                default : {
                    console.log('bizarre');
                    break;
                }

            }

            inputs[4].value = article.prix; 
            inputs[5].value = article.nbreyellow;
            inputs[6].value = article.nbreboth;
            inputs[7].value = article.nbrevide;
            description.textContent = article.courteDescription
            let lescouleurs = typeof article.lescouleurs === 'string' ? JSON.parse(article.lescouleurs) : article.lescouleurs;
            lescouleurs.forEach(couleur=>{
                // console.log(couleur.value);
                let input = document.createElement('input');
                input.type = "checkbox";
                input.name = couleur.nom;
                input.checked = true;
                input.value = couleur.value;
                let label = document.createElement('label');
                label.textContent = couleur.nom; 
                let div = document.createElement('div');
                div.insertAdjacentElement('beforeend', input);
                div.insertAdjacentElement('beforeend', label);
                select.insertAdjacentElement('afterend', div);
            })

            inputs[8].file = article.cartImg;
            let checks = document.querySelectorAll('input');
            checks.forEach(input=>{
                if(input.type === "checkbox"){
                    if(input.checked === true){
                        couleurs.push({'nom': input.name, 'value': input.value});
                        // console.log(couleurs);
                    }else{
                        let index = couleurs.findIndex(item=>{item.nom === input.name && item.value === input.value});
                        if(index !== -1){
                            couleurs.splice(index, 1);
                            
                        }
                    }
                }
            })
        }
        
        console.log(couleurs);
        document.addEventListener('DOMContentLoaded', produit);
        
    </script>
</body>
</html>