<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page | Admin</title>
    <meta name="description" content ="site Ecommerce au Bénin">
    <link rel="stylesheet" href="../css/sortie.css">
</head>

<body class="bg-gray-50 font-sans antialiased">

    <header class="bg-white border-b sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 h-16 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-green-500 p-1.5 rounded-lg text-white font-bold">D</div>
                <span class="text-xl font-bold tracking-tight text-gray-800">Modifier <span class="text-green-500 uppercase">l'article</span></span>
            </div>
            <a href="index.php?admin=me&dash=dash" class="text-sm font-bold text-gray-500 hover:text-green-600 px-4 py-2 border rounded-full transition-all">
                &larr; Annuler
            </a>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-10">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white shadow-xl shadow-gray-200/50 rounded-3xl overflow-hidden border border-gray-100">
            
            <div class="p-8 border-b border-gray-50 bg-gray-50/30">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-40 h-40 rounded-2xl border-4 border-white shadow-md overflow-hidden bg-gray-200 relative group">
                            <img id="preview" src="#" alt="Aperçu" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="text-white text-xs font-bold">Changer l'image</span>
                            </div>
                        </div>
                        <input type="file" name="cartImg" id="img" class="text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 cursor-pointer">
                    </div>

                    <div class="md:col-span-2 space-y-4">
                        <div>
                            <label class="block text-xs font-black uppercase text-gray-400 tracking-widest mb-1">Nom du produit</label>
                            <input type="text" id="nomP" name="nomP" class="w-full px-4 py-3 rounded-xl border-gray-200 border focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none font-bold text-lg" placeholder="Ex: Dolce Air Pro">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase text-gray-400 tracking-widest mb-1">Prix (XOF)</label>
                            <input type="number" id="prix" name="prix" class="w-full px-4 py-3 rounded-xl border-gray-200 border focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none font-black text-green-600 text-xl" placeholder="0">
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-xs font-black uppercase text-gray-400 tracking-widest mb-3">Statut de l'article</label>
                        <div class="flex gap-3">
                            <?php foreach(['Nouveau', 'Populaire', 'Limité'] as $s): ?>
                            <label class="flex-1">
                                <input type="radio" name="status" value="<?= $s ?>" class="hidden peer">
                                <div class="text-center p-2 rounded-xl border-2 border-gray-100 peer-checked:border-green-500 peer-checked:bg-green-50 peer-checked:text-green-700 text-sm font-bold text-gray-500 cursor-pointer transition-all">
                                    <?= $s ?>
                                </div>
                            </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase text-gray-400 tracking-widest mb-3">Évaluation (Étoiles)</label>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-yellow-50 p-3 rounded-xl border border-yellow-100 text-center">
                                <span class="block text-[10px] font-bold text-yellow-600 uppercase">Pleines</span>
                                <input type="number" name="nbreyellow" class="w-full bg-transparent text-center font-black text-yellow-700 outline-none" value="0">
                            </div>
                            <div class="bg-blue-50 p-3 rounded-xl border border-blue-100 text-center">
                                <span class="block text-[10px] font-bold text-blue-600 uppercase">Moitié</span>
                                <input type="number" name="nbreboth" class="w-full bg-transparent text-center font-black text-blue-700 outline-none" value="0">
                            </div>
                            <div class="bg-gray-50 p-3 rounded-xl border border-gray-100 text-center">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase">Vides</span>
                                <input type="number" name="nbrevide" class="w-full bg-transparent text-center font-black text-gray-500 outline-none" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black uppercase text-gray-400 tracking-widest mb-1">Description</label>
                    <textarea name="description" id="description" rows="7" class="w-full px-4 py-3 rounded-xl border-gray-200 border focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none text-sm leading-relaxed" placeholder="Détails du produit..."></textarea>
                </div>
            </div>

            <div class="px-8 pb-8">
                <label id="clrs" class="block text-xs font-black uppercase text-gray-400 tracking-widest mb-3">Couleurs Disponibles</label>
                <div class="conteneur grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                    </div>
            </div>

            <div class="p-8 bg-gray-50 border-t border-gray-100 flex justify-end">
                <button type="submit" class="w-full md:w-auto bg-green-500 hover:bg-green-600 text-white px-12 py-4 rounded-2xl font-black uppercase tracking-widest shadow-lg shadow-green-200 transition-all transform hover:-translate-y-1">
                    Enregistrer les modifications
                </button>
            </div>
        </form>
    </main>

    <script>
    
        // Ta logique JS reste la même, j'ai juste ajouté l'aperçu image en direct
        const imgInput = document.getElementById('img');
        const preview = document.getElementById('preview');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                preview.src = URL.createObjectURL(file);
            }
        }

        // --- Ton script existant ---
        let inputs = document.querySelectorAll('input');
        let description = document.querySelector('textarea');
        
        async function produit() {
            const requete = await fetch('?info=<?= $toupdate ?>');
            const article = await requete.json();

            inputs[1].value = article.cartName; // Index ajusté car header/preview ajoutés
            preview.src = "imagesuploade/"+article.cartImg;

            // Mapping automatique des radios
            const radios = document.querySelectorAll('input[type="radio"]');
            radios.forEach(r => { if(r.value === article.status) r.checked = true; });

            // Remplissage des autres champs
            document.getElementById('prix').value = article.prix;
            document.getElementsByName('nbreyellow')[0].value = article.nbreyellow;
            document.getElementsByName('nbreboth')[0].value = article.nbreboth;
            document.getElementsByName('nbrevide')[0].value = article.nbrevide;
            description.value = article.courteDescription;

            // Couleurs
            let lescouleurs = typeof article.lescouleurs === 'string' ? JSON.parse(article.lescouleurs) : article.lescouleurs;
            const catalogueCouleurs = [
                { nom: "Noir", value: "black" }, { nom: "Blanc", value: "white" },
                { nom: "Bleu nuit", value: "navy" }, { nom: "Rouge", value: "red" },
                { nom: "Gris Titane", value: "slategray" },
                { nom: "Gris", value: "gray" }, { nom: "Vert", value: "green" },
                { nom: "Or 24K", value: "gold" }, { nom: "Argent", value: "silver" }
            ];

            const conteneurCouleurs = document.querySelector('.conteneur'); 
            conteneurCouleurs.innerHTML = ""; 
            
            catalogueCouleurs.forEach(c => {
                const estPossede = lescouleurs.some(lc => {
                    let parsed = typeof lc === 'string' ? JSON.parse(lc) : lc;
                    return parsed.value === c.value || parsed.nom === c.nom;
                });

                let div = document.createElement('label');
                div.className = `flex items-center gap-3 p-3 rounded-xl border border-gray-100 cursor-pointer transition-all hover:bg-gray-50 ${estPossede ? 'bg-green-50/50 border-green-200' : ''}`;

                div.innerHTML = `
                    <input type="checkbox" name="couleurs[]" value='${JSON.stringify(c)}' ${estPossede ? 'checked' : ''} class="w-4 h-4 accent-green-500">
                    <span class="w-4 h-4 rounded-full shadow-inner" style="background-color: ${c.value}"></span>
                    <span class="text-xs font-bold text-gray-600">${c.nom}</span>
                `;
                conteneurCouleurs.appendChild(div);
            });
        }

        document.addEventListener('DOMContentLoaded', produit);
    </script>
</body>
</html>