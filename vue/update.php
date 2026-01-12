<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sortie.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
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
        <label for="color" id="clrs">Les couleurs disponibles</label>
        <div class="conteneur">
        </div>

        <!--image-->
        <input type="file" name="cartImg" id="img">

        <input type="submit" value="Valider">

    </form>
    <script>
        let inputs = document.querySelectorAll('input');
        let prix = document.getElementById('prix');
        let description = document.querySelector('textarea');
        let select = document.getElementById('clrs');
        let couleurs = [];
        async function produit() {
    const requete = await fetch('?info=<?= $toupdate ?>');
    const article = await requete.json();

    inputs[0].value = article.cartName;

    switch (article.status) {
        case "Nouveau":
            inputs[1].checked = true;
            break;
        case "Populaire":
            inputs[2].checked = true;
            break;
        case "Limité":
            inputs[3].checked = true;
            break;
        default:
            console.log('bizarre');
            break;
    }

    inputs[4].value = article.prix;
    inputs[5].value = article.nbreyellow;
    inputs[6].value = article.nbreboth;
    inputs[7].value = article.nbrevide;
    description.textContent = article.courteDescription;

    // Gestion des couleurs
    let lescouleurs = typeof article.lescouleurs === 'string' ? JSON.parse(article.lescouleurs) : article.lescouleurs;
    const catalogueCouleurs = [
        { nom: "Noir", value: "black" },
        { nom: "Blanc", value: "white" },
        { nom: "Bleu nuit", value: "blue" },
        { nom: "Bleu nuit", value: "navy" },
        { nom: "Rouge", value: "red" },
        { nom: "Gris", value: "gray" },
        { nom: "Vert", value: "green" },
        { nom: "Noyer", value: "brown" },
        { nom: "Or 24K", value: "gold" },
        { nom: "Argent Brossé", value: "sliver" },
        { nom: "Cuivre Poli", value: "peru" },
        { nom: "Gris Titane", value: "slategray" }
    ];

    const conteneurCouleurs = document.querySelector('.conteneur'); 
    conteneurCouleurs.innerHTML = ""; 
    catalogueCouleurs.forEach(c => {
        // On vérifie si cette couleur du catalogue est possédée par l'article
        let estPossede;
        lescouleurs.forEach(couleur=>{
            couleur = typeof couleur === 'string' ? JSON.parse(couleur) : couleur;
            estPossede = c.value === couleur.value ? true : false;
        })       
        let div = document.createElement('div');
        div.className = "flex items-center gap-2 bg-gray-50 p-2 rounded border";

        let input = document.createElement('input');
        input.type = "checkbox";
        input.name = "couleurs[]"; // Important pour récupérer un tableau en PHP
        input.value = JSON.stringify(c); // On stocke l'objet entier en JSON pour le récupérer facilement
        input.checked = estPossede; // Cochée si l'article l'a déjà
        input.id = `color-${c.value}`;
        let label = document.createElement('label');
        label.setAttribute('for', `color-${c.value}`);
        label.textContent = c.nom;
        
        // Petit bonus : afficher une pastille de couleur
        let pastille = document.createElement('span');
        pastille.style.backgroundColor = c.value;
        pastille.className = "w-4 h-4 rounded-full border border-gray-300";

        div.appendChild(input);
        div.appendChild(pastille);
        div.appendChild(label);
        
        conteneurCouleurs.appendChild(div);
    });

    // --- INSERTION DE L'IMAGE DANS INPUT[8] ---
    if (article.cartImg) {
        try {
            const response = await fetch(article.cartImg);
            const data = await response.blob();
            // On extrait le nom du fichier depuis l'URL ou on en donne un par défaut
            const nomFichier = article.cartImg.split('/').pop() || 'image_actuelle.jpg';
            const file = new File([data], nomFichier, { type: data.type });
            console.log(data);
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            inputs[8].files = dataTransfer.files;
        } catch (error) {
            console.error("Impossible de charger l'image dans le champ file :", error);
        }
    }
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